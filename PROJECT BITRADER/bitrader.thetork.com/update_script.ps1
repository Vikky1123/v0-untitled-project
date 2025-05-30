# PowerShell script to update all HTML files with the theme-mode.js script
# and replace existing toggle code with the new persistent theme handling

$basePath = Get-Location
$htmlFiles = Get-ChildItem -Path $basePath -Filter "*.html" -Recurse -File

Write-Host "Found $($htmlFiles.Count) HTML files to process."

# Create the theme-mode.js file if not exists
$themeModeJsDir = Join-Path -Path $basePath -ChildPath "wp-content\themes\bitrader\assets\js"
$themeModeJsPath = Join-Path -Path $themeModeJsDir -ChildPath "theme-mode.js"

if (-not (Test-Path $themeModeJsDir)) {
    New-Item -ItemType Directory -Path $themeModeJsDir -Force
}

$themeModeCodes = @'
/**
 * Bitrader Theme Mode JS
 * Handles persistent light/dark mode across pages
 */

document.addEventListener("DOMContentLoaded", function() {
    const toggleVersionButton = document.getElementById('btnSwitch');
    const htmlElement = document.documentElement;
    const icon = document.querySelector('#btnSwitch img');
    
    // Check if there's a main logo element
    const mainLogo = document.getElementById('main-logo');
    
    // Get default and dark logo URLs (handle relative paths)
    let defaultLogoUrl = '';
    let darkLogoUrl = '';
    
    if (mainLogo) {
        defaultLogoUrl = mainLogo.src;
        
        // Determine the base path for the current page
        const basePath = window.location.pathname.split('/').slice(0, -1).join('/');
        const isRoot = basePath === '' || basePath === '/';
        
        // Create appropriate path for the dark logo based on current location
        if (isRoot) {
            darkLogoUrl = 'wp-content/uploads/2024/06/logo-dark-1.png';
        } else if (basePath.includes('bitrader.thetork.com')) {
            darkLogoUrl = '../wp-content/uploads/2024/06/logo-dark-1.png';
        } else {
            // Count directory depth and add appropriate ../
            const depth = basePath.split('/').filter(Boolean).length;
            const prefix = Array(depth).fill('..').join('/');
            darkLogoUrl = prefix + '/wp-content/uploads/2024/06/logo-dark-1.png';
        }
    }
    
    // Function to apply theme
    function applyTheme(isDark) {
        // Update HTML attribute
        htmlElement.setAttribute('data-bs-theme', isDark ? 'dark' : 'light');
        
        // Update icon
        if (icon) {
            if (isDark) {
                const iconPath = icon.src.split('/').slice(0, -1).join('/') + '/sun.svg';
                icon.src = iconPath;
                toggleVersionButton.style.backgroundColor = 'white';
            } else {
                const iconPath = icon.src.split('/').slice(0, -1).join('/') + '/moon.svg';
                icon.src = iconPath;
                toggleVersionButton.style.backgroundColor = '#00D094';
            }
        }
        
        // Update logo if available
        if (mainLogo && defaultLogoUrl && darkLogoUrl) {
            mainLogo.src = isDark ? darkLogoUrl : defaultLogoUrl;
        }
    }
    
    // Check localStorage for saved preference
    const savedTheme = localStorage.getItem('bitrader-theme-mode');
    const isDarkMode = savedTheme === 'dark';
    
    // Apply saved theme preference
    if (savedTheme) {
        applyTheme(isDarkMode);
    }
    
    // Add click event to toggle button
    if (toggleVersionButton) {
        toggleVersionButton.addEventListener('click', function() {
            // Get current theme
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const isDark = currentTheme !== 'dark';
            
            // Save to localStorage
            localStorage.setItem('bitrader-theme-mode', isDark ? 'dark' : 'light');
            
            // Apply theme
            applyTheme(isDark);
        });
    }
});
'@

Set-Content -Path $themeModeJsPath -Value $themeModeCodes

# Process each HTML file
foreach ($file in $htmlFiles) {
    Write-Host "Processing: $($file.FullName)"
    
    $content = Get-Content -Path $file.FullName -Raw
    $modified = $false
    
    # 1. Replace the moon toggle script
    $moonTogglePattern = 'const moon = document.getElementById\(''btnSwitch''\);[\s\S]*?moon.addEventListener\(''click'', \(\) => \{[\s\S]*?}\);'
    $moonToggleReplacement = "// Theme toggle handling moved to theme-mode.js"
    
    if ($content -match $moonTogglePattern) {
        $content = $content -replace $moonTogglePattern, $moonToggleReplacement
        $modified = $true
    }
    
    # 2. Replace the logo change script
    $logoChangePattern = '/\*={3,}[\s\S]*?Change logo when click on dark mood button[\s\S]*?={3,}\*/[\s\S]*?document.addEventListener\("DOMContentLoaded", function\(\) \{[\s\S]*?var toggleVersionButton[\s\S]*?}\);[\s\S]*?}\);'
    $logoChangeReplacement = "// Logo change handling moved to theme-mode.js"
    
    if ($content -match $logoChangePattern) {
        $content = $content -replace $logoChangePattern, $logoChangeReplacement
        $modified = $true
    }
    
    # 3. Add the theme-mode.js script if not already present
    $scriptPattern = '<script src="[^"]*?theme-mode.js"'
    $headEndPattern = '</head>'
    
    if (-not ($content -match $scriptPattern)) {
        # Determine the relative path based on file location
        $relativePath = [System.IO.Path]::GetDirectoryName($file.FullName.Substring($basePath.Path.Length))
        $relativePath = $relativePath -replace '\\', '/'
        
        $scriptPath = ""
        if ($relativePath -eq "") {
            # Root level
            $scriptPath = 'wp-content/themes/bitrader/assets/js/theme-mode.js'
        } else {
            # Subdirectory - count the depth
            $depth = ($relativePath.Split('/') | Where-Object { $_ -ne "" }).Count
            $prefix = "../" * $depth
            $scriptPath = $prefix + 'wp-content/themes/bitrader/assets/js/theme-mode.js'
        }
        
        $scriptTag = "<script src=`"$scriptPath`" id=`"bitrader-theme-mode-js`"></script>"
        $content = $content -replace $headEndPattern, "$scriptTag`n</head>"
        $modified = $true
    }
    
    # Save the modified content back to the file
    if ($modified) {
        Set-Content -Path $file.FullName -Value $content
        Write-Host "Updated: $($file.FullName)" -ForegroundColor Green
    } else {
        Write-Host "No changes needed for: $($file.FullName)" -ForegroundColor Yellow
    }
}

Write-Host "Done processing all HTML files." -ForegroundColor Cyan
