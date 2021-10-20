
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
                }]
        };

        var config2 = {
                    type: 'doughnut',
                    data: data,
        };

        
  