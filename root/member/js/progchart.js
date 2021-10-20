
        AOS.init();
        Chart.defaults.fontSize = 16;


        var data = {
                labels: ['D1','D2','D3'],
                datasets: [{
                    label: 'Attendance',
                     data: [100, 100, 100],
                    backgroundColor: [
                        'rgb(134, 255, 113)',
                        'rgba(24, 24, 24,0.3)',
                        'rgba(24, 24, 24,0.3)'
                    ],
                    hoverOffset: 4
                }],
                options: [{
                    elements: {
                      center: {
                        text: '33%',
                        color: '#FF6384',
                        fontStyle: 'Arial', 
                        sidePadding: 20, 
                        minFontSize: 20, 
                        lineHeight: 25 
                      }
                    }
            }]

        };

        var config2 = {
                    type: 'doughnut',
                    data: data,
        };

        
  