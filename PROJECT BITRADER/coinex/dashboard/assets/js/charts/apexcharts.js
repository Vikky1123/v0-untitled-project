(function (jQuery) {
    "use strict";
//apex

let lastDate = 0
  let TICKINTERVAL = 864e5;
  let XAXISRANGE = 7776e5;
  const chartFunction = {
      chartDummySearies: (e, t, refData) => {
          let data = refData
          const a = e + TICKINTERVAL;
          lastDate = a;
          for (let n = 0; n < data.length - 50; n++) data[n].x = a - XAXISRANGE - TICKINTERVAL, data[n].y = 0;
          data.push({
              x: a,
              y: Math.floor(Math.random() * (t.max - t.min + 1)) + t.min
          })
          return data
      },
      generateDayWiseTimeSeries(baseval, count, yrange) {
          let i = 0;
          let series = [];
          while (i < count) {
              let x = baseval;
              let y =
                  Math.floor(Math.random() * (yrange.max - yrange.min + 8)) + yrange.min;

              series.push([x, y]);
              baseval += 86400000;
              i++;
          }
          return series;
      }
  }
if (jQuery("#apex-candlestick-chart").length) {
  options = {
      chart: {
          height: 357,
          type: "candlestick",
          toolbar: {
            show: false
        },
      },
      colors: ["#3a57e8", "#1aa053"],
      series: [{
          data: [{
              x: new Date(15387786e5),
              y: [6629.81, 6650.5, 6623.04, 6633.33]
          }, {
              x: new Date(15387804e5),
              y: [6632.01, 6643.59, 6620, 6630.11]
          }, {
              x: new Date(15387822e5),
              y: [6630.71, 6648.95, 6623.34, 6635.65]
          }, {
              x: new Date(1538784e6),
              y: [6635.65, 6651, 6629.67, 6638.24]
          }, {
              x: new Date(15387858e5),
              y: [6638.24, 6640, 6620, 6624.47]
          }, {
              x: new Date(15387876e5),
              y: [6624.53, 6636.03, 6621.68, 6624.31]
          }, {
              x: new Date(15387894e5),
              y: [6624.61, 6632.2, 6617, 6626.02]
          }, {
              x: new Date(15387912e5),
              y: [6627, 6627.62, 6584.22, 6603.02]
          }, {
              x: new Date(1538793e6),
              y: [6605, 6608.03, 6598.95, 6604.01]
          }, {
              x: new Date(15387948e5),
              y: [6604.5, 6614.4, 6602.26, 6608.02]
          }, {
              x: new Date(15387966e5),
              y: [6608.02, 6610.68, 6601.99, 6608.91]
          }, {
              x: new Date(15387984e5),
              y: [6608.91, 6618.99, 6608.01, 6612]
          }, {
              x: new Date(15388002e5),
              y: [6612, 6615.13, 6605.09, 6612]
          }, {
              x: new Date(1538802e6),
              y: [6612, 6624.12, 6608.43, 6622.95]
          }, {
              x: new Date(15388038e5),
              y: [6623.91, 6623.91, 6615, 6615.67]
          }, {
              x: new Date(15388056e5),
              y: [6618.69, 6618.74, 6610, 6610.4]
          }, {
              x: new Date(15388074e5),
              y: [6611, 6622.78, 6610.4, 6614.9]
          }, {
              x: new Date(15388092e5),
              y: [6614.9, 6626.2, 6613.33, 6623.45]
          }, {
              x: new Date(1538811e6),
              y: [6623.48, 6627, 6618.38, 6620.35]
          }, {
              x: new Date(15388128e5),
              y: [6619.43, 6620.35, 6610.05, 6615.53]
          }, {
              x: new Date(15388146e5),
              y: [6615.53, 6617.93, 6610, 6615.19]
          }, {
              x: new Date(15388164e5),
              y: [6615.19, 6621.6, 6608.2, 6620]
          }, {
              x: new Date(15388182e5),
              y: [6619.54, 6625.17, 6614.15, 6620]
          }, {
              x: new Date(153882e7),
              y: [6620.33, 6634.15, 6617.24, 6624.61]
          }, {
              x: new Date(15388218e5),
              y: [6625.95, 6626, 6611.66, 6617.58]
          }, {
              x: new Date(15388236e5),
              y: [6619, 6625.97, 6595.27, 6598.86]
          }, {
              x: new Date(15388254e5),
              y: [6598.86, 6598.88, 6570, 6587.16]
          }, {
              x: new Date(15388272e5),
              y: [6588.86, 6600, 6580, 6593.4]
          }, {
              x: new Date(1538829e6),
              y: [6593.99, 6598.89, 6585, 6587.81]
          }, {
              x: new Date(15388308e5),
              y: [6587.81, 6592.73, 6567.14, 6578]
          }, {
              x: new Date(15388326e5),
              y: [6578.35, 6581.72, 6567.39, 6579]
          }, {
              x: new Date(15388344e5),
              y: [6579.38, 6580.92, 6566.77, 6575.96]
          }, {
              x: new Date(15388362e5),
              y: [6575.96, 6589, 6571.77, 6588.92]
          }, {
              x: new Date(1538838e6),
              y: [6588.92, 6594, 6577.55, 6589.22]
          }, {
              x: new Date(15388398e5),
              y: [6589.3, 6598.89, 6589.1, 6596.08]
          }, {
              x: new Date(15388416e5),
              y: [6597.5, 6600, 6588.39, 6596.25]
          }, {
              x: new Date(15388434e5),
              y: [6598.03, 6600, 6588.73, 6595.97]
          }, {
              x: new Date(15388452e5),
              y: [6595.97, 6602.01, 6588.17, 6602]
          }, {
              x: new Date(1538847e6),
              y: [6602, 6607, 6596.51, 6599.95]
          }, {
              x: new Date(15388488e5),
              y: [6600.63, 6601.21, 6590.39, 6591.02]
          }, {
              x: new Date(15388506e5),
              y: [6591.02, 6603.08, 6591, 6591]
          }, {
              x: new Date(15388524e5),
              y: [6591, 6601.32, 6585, 6592]
          }, {
              x: new Date(15388542e5),
              y: [6593.13, 6596.01, 6590, 6593.34]
          }, {
              x: new Date(1538856e6),
              y: [6593.34, 6604.76, 6582.63, 6593.86]
          }, {
              x: new Date(15388578e5),
              y: [6593.86, 6604.28, 6586.57, 6600.01]
          }, {
              x: new Date(15388596e5),
              y: [6601.81, 6603.21, 6592.78, 6596.25]
          }, {
              x: new Date(15388614e5),
              y: [6596.25, 6604.2, 6590, 6602.99]
          }, {
              x: new Date(15388632e5),
              y: [6602.99, 6606, 6584.99, 6587.81]
          }, {
              x: new Date(1538865e6),
              y: [6587.81, 6595, 6583.27, 6591.96]
          }, {
              x: new Date(15388668e5),
              y: [6591.97, 6596.07, 6585, 6588.39]
          }, {
              x: new Date(15388686e5),
              y: [6587.6, 6598.21, 6587.6, 6594.27]
          }, {
              x: new Date(15388704e5),
              y: [6596.44, 6601, 6590, 6596.55]
          }, {
              x: new Date(15388722e5),
              y: [6598.91, 6605, 6596.61, 6600.02]
          }, {
              x: new Date(1538874e6),
              y: [6600.55, 6605, 6589.14, 6593.01]
          }, {
              x: new Date(15388758e5),
              y: [6593.15, 6605, 6592, 6603.06]
          }]
      }],
      xaxis: {
          type: "datetime",
          axisBorder: {
            show: true,
            color: '#4A4A4F',
        },
        labels: {
            minHeight:20,
            maxHeight:20,
      },
    },
      yaxis: {
          tooltip: {
              enabled: !0
          },
          labels: {
            minWidth: 19,
            maxWidth: 19,
          },
      },
      grid: {
        borderColor: '#4A4A4F',
      }
  };
  if(typeof ApexCharts !== undefined){
     const chart = new ApexCharts(document.querySelector("#apex-candlestick-chart"), options).render()
  }
}


//radar-multiple-chart
if (jQuery("#radar-multiple-chart").length) {
  var options = {
      series: [{
          name: 'Series 1',
          data: [80, 50, 30, 40, 100, 20],
      }, {
          name: 'Series 2',
          data: [20, 30, 40, 80, 20, 80],
      }, {
          name: 'Series 3',
          data: [44, 76, 78, 13, 43, 10],
      }],
      colors: ["#3a57e8", "#c03221", "#1aa053"],
      chart: {
          height: 310,
          type: 'radar',
          dropShadow: {
              enabled: true,
              blur: 1,
              left: 1,
              top: 1
          }
      },
      title: {
          text: 'Radar Chart - Multi Series'
      },
      stroke: {
          width: 2
      },
      fill: {
          opacity: 0.1
      },
      markers: {
          size: 0
      },
      xaxis: {
          categories: ['2011', '2012', '2013', '2014', '2015', '2016']
      }
  };

  if(typeof ApexCharts !== undefined){
    (chart = new ApexCharts(document.querySelector("#radar-multiple-chart"), options)).render()
  }
}

// multiple-radialbar-chart

  if (jQuery('#portfolio-chart').length) {
    // Track last update time
    let lastUpdateTime = new Date().getTime();
    
    // Generate dates for the last 7 days
    const generateLastSevenDays = () => {
        const dates = [];
        const values = [];
        const today = new Date();
        
        // Generate data for the last 7 days (including today)
        for (let i = 6; i >= 0; i--) {
            const date = new Date();
            date.setDate(today.getDate() - i);
            dates.push(date.getTime()); // Use timestamp for ApexCharts
            
            // Random value between 10-20 to maintain the same data range as before
            const value = Math.floor(Math.random() * 10) + 10;
            values.push([date.getTime(), value]);
        }
        
        // Update the lastUpdateTime
        lastUpdateTime = new Date().getTime();
        
        return values;
    };
    
    const options = {
        series: [{
                name: 'Portfolio Value',
                data: generateLastSevenDays() // Use dynamic dates
            }
        ],
        chart: {
            toolbar: {
                show: false,
            },
            type: 'area',
            height: 385,
            stacked: true,
            zoom: {
                enabled: true
            },
            events: {
                selection: function(chart, e) {
                    console.log(new Date(e.xaxis.min))
                }
            },
        },
        colors: ['#FF971D'],
        stroke: {
            curve: 'straight',
            width: 1,
            colors: ['#ffffff']
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            show: false
        },
        fill: {
            type: 'gradient',
            gradient: {
                opacityFrom: 0.91,
                opacityTo: .1,
            }
        },
        xaxis: {
            type: 'datetime',
            labels: {
                show: true,
                minHeight: 20,
                maxHeight: 20,
                datetimeFormatter: {
                    year: 'yyyy',
                    month: 'MMM',
                    day: 'dd MMM',
                    hour: 'HH:mm'
                },
                format: 'dd MMM' // Format to show day and month abbreviation
            },
            axisTicks: {
              show: false,
            }
        },
        grid: {
          show: true,
          borderColor: '#33322f',
          strokeDashArray: 0,
          position: 'back',
          xaxis: {
            lines: {
              show: true
            } 
          },
          yaxis: {
            lines: {
              show: false
            } 
          }
        },
        yaxis: {
          opposite: true,
          forceNiceScale: true,
            labels: {
                minWidth: 20,
                maxWidth: 20,
                formatter: function(val) {
                    return val;
                }
            }
          }
    };

    const chart = new ApexCharts(document.querySelector("#portfolio-chart"), options);
    chart.render();
    
    // Function to update chart with new dates
    const updateChartDates = () => {
        chart.updateSeries([{
            name: 'Portfolio Value',
            data: generateLastSevenDays()
        }]);
    };
    
    // Set up a timer to update at midnight
    const setupMidnightUpdate = () => {
        const now = new Date();
        const night = new Date(
            now.getFullYear(),
            now.getMonth(),
            now.getDate() + 1, // tomorrow
            0, 0, 0 // at 00:00:00 hours
        );
        const msToMidnight = night.getTime() - now.getTime();
        
        // Update at midnight
        setTimeout(() => {
            updateChartDates();
            // Set up the next update
            setupMidnightUpdate();
        }, msToMidnight);
    };
    
    // Start the midnight update cycle
    setupMidnightUpdate();
    
    // Update chart when user returns to the page after being away
    document.addEventListener('visibilitychange', () => {
        if (document.visibilityState === 'visible') {
            // If it's been more than an hour since the last update
            const currentTime = new Date().getTime();
            const oneHour = 60 * 60 * 1000; // 1 hour in milliseconds
            
            if (currentTime - lastUpdateTime > oneHour) {
                updateChartDates();
            }
        }
    });
}

//multiple-radialbar-chart
if (jQuery('#multiple-radialbar-chart').length) {
    const options = {
      series: [55, 75],
      chart: {
      height: 230,
      type: 'radialBar',
    },
    colors: ["#00EC42", "#FF2E2E"],
    plotOptions: {
      radialBar: {
        hollow: {
            margin: 10,
            size: "50%",
        },
        track: {
            margin: 10,
            strokeWidth: '50%',
        },
        dataLabels: {
            show: false,
        }
      }
    },
    labels: ['Bitcoin', 'LiteCoin'],
    };
    if(ApexCharts !== undefined) {
      var chart = new ApexCharts(document.querySelector("#multiple-radialbar-chart"), options);
      chart.render();
    }
  }

//market overview chart
if(jQuery('#market-overview-chart').length){
    var options = {
        series: [{
        name: "Data",
        data: [
          [1327359600000,3000.95],
          [1327446000000,3100.34],
          [1327532400000,3100.18],
          [1327618800000,3100.05],
          [1327878000000,3100.00],
          [1327964400000,3000.95],
          [1328050800000,3100.24],
          [1328137200000,3100.29],
          [1328223600000,3100.85],
          [1328482800000,3100.86],
          [1328569200000,3200.28],
          [1328655600000,3200.10],
          [1328742000000,3200.65],
          [1328828400000,3200.21],
          [1329087600000,3200.35],
          [1329174000000,3200.44],
          [1329260400000,3200.46],
          [1329346800000,3200.86],
          [1329433200000,3200.75],
          [1329778800000,3200.54],
          [1329865200000,3200.33],
          [1329951600000,3200.97],
          [1330038000000,3300.41],
          [1330297200000,3300.27],
          [1330383600000,3300.27],
          [1330470000000,3200.89],
          [1330556400000,3300.10],
          [1330642800000,3300.73],
          [1330902000000,3300.22],
          [1330988400000,3100.99],
          [1331074800000,3200.41],
          [1331161200000,3300.05],
          [1331247600000,3300.64],
          [1331506800000,3300.56],
          [1331593200000,3400.22],
          [1331679600000,3300.77],
          [1331766000000,3400.17],
          [1331852400000,3300.82],
          [1332111600000,3400.51],
          [1332198000000,3300.16],
          [1332284400000,3300.56],
          [1332370800000,3300.71],
          [1332457200000,3300.81],
          [1332712800000,3400.40],
          [1332799200000,3400.63],
          [1332885600000,3400.46],
          [1332972000000,3400.48],
          [1333058400000,3400.31],
          [1333317600000,3400.70],
          [1333404000000,3400.31],
          [1333490400000,3300.46],
          [1333576800000,3300.59],
          [1333922400000,3300.22],
          [1334008800000,3200.61],
          [1334095200000,3300.01],
          [1334181600000,3300.55],
          [1334268000000,3300.18],
          [1334527200000,3200.84],
          [1334613600000,3300.84],
          [1334700000000,3300.39],
          [1334786400000,3200.91],
          [1334872800000,3300.06],
          [1335132000000,3200.62],
          [1335218400000,3200.40],
          [1335304800000,3300.13],
          [1335391200000,3300.26],
          [1335477600000,3300.58],
          [1335736800000,3300.55],
          [1335823200000,3300.77],
          [1335909600000,3300.76],
          [1335996000000,3300.32],
          [1336082400000,3200.61],
          [1336341600000,3200.52],
          [1336428000000,3200.67],
          [1336514400000,3200.52],
          [1336600800000,3100.92],
          [1336687200000,3200.20],
          [1336946400000,3200.23],
          [1337032800000,3200.33],
          [1337119200000,3200.36],
          [1337205600000,3200.01],
          [1337292000000,3100.31],
          [1337551200000,3200.01],
          [1337637600000,3200.01],
          [1337724000000,3200.18],
          [1337810400000,3100.54],
          [1337896800000,3100.60],
          [1338242400000,3200.05],
          [1338328800000,3100.29],
          [1338415200000,3100.05],
          [1338501600000,2900.82],
          [1338760800000,3000.31],
          [1338847200000,3000.70],
          [1338933600000,3100.69],
          [1339020000000,3100.32],
          [1339106400000,3100.65],
          [1339365600000,3100.13],
          [1339452000000,3100.77],
          [1339538400000,3100.79],
          [1339624800000,3100.67],
          [1339711200000,3200.39],
          [1339970400000,3200.63],
          [1340056800000,3200.89],
          [1340143200000,3100.99],
          [1340229600000,3100.23],
          [1340316000000,3100.57],
          [1340575200000,3000.84],
          [1340661600000,3100.07],
          [1340748000000,3100.41],
          [1340834400000,3100.17],
          [1340920800000,3200.37],
          [1341180000000,3200.19],
          [1341266400000,3200.51],
          [1341439200000,3200.53],
          [1341525600000,3100.37],
          [1341784800000,3000.43],
          [1341871200000,3000.44],
          [1341957600000,3000.20],
          [1342044000000,3000.14],
          [1342130400000,3000.65],
          [1342389600000,3000.40],
          [1342476000000,3000.65],
          [1342562400000,3100.43],
          [1342648800000,3100.89],
          [1342735200000,3100.38],
          [1342994400000,3000.64],
          [1343080800000,3000.02],
          [1343167200000,3000.33],
          [1343253600000,3000.95],
          [1343340000000,3100.89],
          [1343599200000,3100.01],
          [1343685600000,3000.88],
          [1343772000000,3000.69],
          [1343858400000,3000.58],
          [1343944800000,3200.02],
          [1344204000000,3200.14],
          [1344290400000,3200.37],
          [1344376800000,3200.51],
          [1344463200000,3200.65],
          [1344549600000,3200.64],
          [1344808800000,3200.27],
          [1344895200000,3200.10],
          [1344981600000,3200.91],
          [1345068000000,3300.65],
          [1345154400000,3300.80],
          [1345413600000,3300.92],
          [1345500000000,3300.75],
          [1345586400000,3300.84],
          [1345672800000,3300.50],
          [1345759200000,3200.26],
          [1346018400000,3200.32],
          [1346104800000,3200.06],
          [1346191200000,3100.96],
          [1346277600000,3100.46],
          [1346364000000,3100.27],
          [1346709600000,3100.43],
          [1346796000000,3200.26],
          [1346882400000,3200.79],
          [1346968800000,3200.46],
          [1347228000000,3200.13],
          [1347314400000,3200.43],
          [1347400800000,3200.42],
          [1347487200000,3200.81],
          [1347573600000,3300.34],
          [1347832800000,3300.41],
          [1347919200000,3200.57],
          [1348005600000,3300.12],
          [1348092000000,3400.53],
          [1348178400000,3300.83],
          [1348437600000,3300.41],
          [1348524000000,3200.90],
          [1348610400000,3200.53],
          [1348696800000,3200.80],
          [1348783200000,3200.44],
          [1349042400000,3200.62],
          [1349128800000,3200.57],
          [1349215200000,3200.60],
          [1349301600000,3200.68],
          [1349388000000,3200.47],
          [1349647200000,3200.23],
          [1349733600000,3100.68],
          [1349820000000,3100.51],
          [1349906400000,3100.78],
          [1349992800000,3100.94],
          [1350252000000,3200.33],
          [1350338400000,3300.24],
          [1350424800000,3300.44],
          [1350511200000,3300.48],
          [1350597600000,3300.24],
          [1350856800000,3300.49],
          [1350943200000,3300.31],
          [1351029600000,3300.36],
          [1351116000000,3300.40],
          [1351202400000,3400.01],
          [1351638000000,3400.02],
          [1351724400000,3400.36],
          [1351810800000,3400.39],
          [1352070000000,3400.24],
          [1352156400000,3400.39],
          [1352242800000,3300.47],
          [1352329200000,3200.98],
          [1352415600000,3200.90],
          [1352674800000,3200.70],
          [1352761200000,3200.54],
          [1352847600000,3200.23],
          [1352934000000,3200.64],
          [1353020400000,3200.65],
          [1353279600000,3200.92],
          [1353366000000,3200.64],
          [1353452400000,3200.84],
          [1353625200000,3300.40],
          [1353884400000,3300.30],
          [1353970800000,3300.18],
          [1354057200000,3300.88],
          [1354143600000,3400.09],
          [1354230000000,3400.61],
          [1354489200000,3400.70],
          [1354575600000,3500.30],
          [1354662000000,3500.40],
          [1354748400000,3500.14],
          [1354834800000,3500.48],
          [1355094000000,3500.75],
          [1355180400000,3500.54],
          [1355266800000,3500.96],
          [1355353200000,3500.53],
          [1355439600000,3700.56],
          [1355698800000,3700.42],
          [1355785200000,3700.49],
          [1355871600000,3800.09],
          [1355958000000,3700.87],
          [1356044400000,3700.71],
          [1356303600000,3700.53],
          [1356476400000,3700.55],
          [1356562800000,3700.30],
          [1356649200000,3600.90],
          [1356908400000,3700.68],
          [1357081200000,3800.34],
          [1357167600000,3700.75],
          [1357254000000,3800.13],
          [1357513200000,3700.94],
          [1357599600000,3800.14],
          [1357686000000,3800.66],
          [1357772400000,3800.62],
          [1357858800000,3800.09],
          [1358118000000,3800.16],
          [1358204400000,3800.15],
          [1358290800000,3700.88],
          [1358377200000,3700.73],
          [1358463600000,3700.98],
          [1358809200000,3700.95],
          [1358895600000,3800.25],
          [1358982000000,3800.10],
          [1359068400000,3800.32],
          [1359327600000,3800.24],
          [1359414000000,3800.52],
          [1359500400000,3700.94],
          [1359586800000,3700.83],
          [1359673200000,3800.34],
          [1359932400000,3800.10],
          [1360018800000,3800.51],
          [1360105200000,3800.40],
          [1360191600000,3800.07],
          [1360278000000,3900.12],
          [1360537200000,3800.64],
          [1360623600000,3800.89],
          [1360710000000,3800.81],
          [1360796400000,3800.61],
          [1360882800000,3800.63],
          [1361228400000,3800.99],
          [1361314800000,3800.77],
          [1361401200000,3800.34],
          [1361487600000,3800.55],
          [1361746800000,3800.11],
          [1361833200000,3800.59],
          [1361919600000,3900.60],
        ]
      }],
        chart: {
        id: 'area-datetime',
        type: 'area',
        height: 340,
        toolbar: {
            show: false
        },
        zoom: {
          autoScaleYaxis: true
        }
      },
      colors: ["#ff0000"],
      stroke: {
          curve: 'smooth',
          width: 2,
      },
      dataLabels: {
        enabled: false
      },
      markers: {
        size: 0,
        style: 'hollow',
      },
      xaxis: {
        axisBorder: {
            show: true,
            color: '#33322f',
        },
        axisTicks: {
          show: true,
          borderType: 'solid',
          color: '#33322f',
        },
        labels: {
            minHeight:20,
            maxHeight:20,
        },
        type: 'datetime',
        min: new Date('01 Mar 2012').getTime(),
        tickAmount: 6,
      },
      yaxis: {
        labels: {
            minWidth: 20,
            maxWidth: 20,
            },
    },
      tooltip: {
        x: {
          format: 'dd MMM yyyy'
        }
      },
      grid: {
        show: true,
        borderColor: '#33322f',
      },
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0,
          opacityTo: 0,
          stops: [0, 100]
        }
      },
      };

      var chart = new ApexCharts(document.querySelector("#market-overview-chart"), options);
      chart.render();
    
    
      var resetCssClasses = function(activeEl) {
      var els = document.querySelectorAll('button')
      Array.prototype.forEach.call(els, function(el) {
        el.classList.remove('active')
      })
    
      activeEl.target.classList.add('active')
    }
    
    document
      .querySelector('#one_month')
      .addEventListener('click', function(e) {
        resetCssClasses(e)
    
        chart.zoomX(
          new Date('28 Jan 2013').getTime(),
          new Date('27 Feb 2013').getTime()
        )
      })
    
    document
      .querySelector('#six_months')
      .addEventListener('click', function(e) {
        resetCssClasses(e)
    
        chart.zoomX(
          new Date('27 Sep 2012').getTime(),
          new Date('27 Feb 2013').getTime()
        )
      })
    
    document
      .querySelector('#one_year')
      .addEventListener('click', function(e) {
        resetCssClasses(e)
        chart.zoomX(
          new Date('27 Feb 2012').getTime(),
          new Date('27 Feb 2013').getTime()
        )
      })
    
    document.querySelector('#ytd').addEventListener('click', function(e) {
      resetCssClasses(e)
    
      chart.zoomX(
        new Date('01 Jan 2013').getTime(),
        new Date('27 Feb 2013').getTime()
      )
    })
    
    document.querySelector('#all').addEventListener('click', function(e) {
      resetCssClasses(e)
    
      chart.zoomX(
        new Date('23 Jan 2012').getTime(),
        new Date('27 Feb 2013').getTime()
      )
    })
}

})(jQuery)