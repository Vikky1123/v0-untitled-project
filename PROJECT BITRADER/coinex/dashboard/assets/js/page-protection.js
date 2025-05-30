/**
 * Page Protection Script
 * 
 * This script creates a full-page overlay that blocks all user interactions
 * and displays a warning message when users attempt to interact with the page.
 * 
 * Usage:
 * 1. Include this script in the page you want to protect
 * 2. Add the 'protected-page' class to the body element
 * 3. Optionally customize the warning message by setting a data attribute:
 *    <body class="protected-page" data-protection-message="Your custom message">
 */

document.addEventListener('DOMContentLoaded', function() {
    // Only activate on pages with the 'protected-page' class
    if (!document.body.classList.contains('protected-page')) {
        return;
    }
    
    // Get custom message if provided
    const customMessage = document.body.getAttribute('data-protection-message') || 
        "You cannot take any action on this page. This is a protected page. Once you have an investment plan, your trading activity will be routed to the correct trading stream.";
    
    // Create overlay
    const overlay = document.createElement('div');
    overlay.id = 'page-protection-overlay';
    overlay.style.position = 'fixed';
    overlay.style.top = '0';
    overlay.style.left = '0';
    overlay.style.width = '100%';
    overlay.style.height = '100%';
    overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    overlay.style.zIndex = '9999';
    overlay.style.display = 'flex';
    overlay.style.justifyContent = 'center';
    overlay.style.alignItems = 'center';
    
    // Add lock icon
    const lockIcon = document.createElement('div');
    lockIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>';
    lockIcon.style.position = 'absolute';
    lockIcon.style.top = '30%';
    overlay.appendChild(lockIcon);
    
    // Create message modal
    const modal = document.createElement('div');
    modal.id = 'protection-modal';
    modal.style.position = 'fixed';
    modal.style.top = '50%';
    modal.style.left = '50%';
    modal.style.transform = 'translate(-50%, -50%)';
    modal.style.backgroundColor = '#1a1a1a';
    modal.style.color = '#ffffff';
    modal.style.padding = '20px';
    modal.style.borderRadius = '10px';
    modal.style.boxShadow = '0 0 20px rgba(0, 0, 0, 0.5)';
    modal.style.maxWidth = '400px';
    modal.style.width = '80%';
    modal.style.textAlign = 'center';
    modal.style.zIndex = '10000';
    
    // Set modal content
    modal.innerHTML = `
        <h4 style="margin-top: 0; color: #ff4a4a;">Protected Page</h4>
        <p>${customMessage}</p>
        <button id="close-protection-modal" style="background-color: #1AA053; color: white; border: none; padding: 12px 20px; border-radius: 5px; cursor: pointer; margin-top: 15px; font-weight: bold; font-size: 16px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">Return to Dashboard</button>
    `;
    
    document.body.appendChild(overlay);
    document.body.appendChild(modal);
    
    // Add click event to the button using a direct onclick attribute
    // This ensures the button will work regardless of event propagation issues
    document.getElementById('close-protection-modal').onclick = function() {
        // Determine the path to the dashboard based on the current location
        let path = '';
        
        // Check if we're in a subdirectory
        if (window.location.pathname.includes('/special-pages/') ||
            window.location.pathname.includes('/auth/') ||
            window.location.pathname.includes('/errors/') ||
            window.location.pathname.includes('/app/')) {
            path = '../index.html';
        } else {
            path = 'index.html';
        }
        
        // Navigate to the dashboard
        window.location.href = path;
        return false;
    };
    
    // Prevent default on all interactive elements
    document.addEventListener('click', function(e) {
        if (e.target.id !== 'close-protection-modal') {
            e.preventDefault();
            e.stopPropagation();
            return false;
        }
    }, true);
    
    document.addEventListener('touchstart', function(e) {
        if (e.target.id !== 'close-protection-modal') {
            e.preventDefault();
            e.stopPropagation();
            return false;
        }
    }, true);
    
    // Disable all form inputs
    const inputs = document.querySelectorAll('input, select, textarea, button:not(#close-protection-modal)');
    inputs.forEach(input => {
        input.disabled = true;
        input.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        }, true);
    });
    
    // Prevent keyboard events
    document.addEventListener('keydown', function(e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
    }, true);
}); 