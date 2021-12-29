
AOS.init();
Chart.defaults.fontSize = 16;


var data = {
        labels: ['D1','D2','D3','D4'],
        datasets: [{
            label: 'Attendance',
              data: [100, 100, 100,100],
            backgroundColor: [
                'rgb(134, 255, 113)',
                'rgba(24, 24, 24,0.3)',
                'rgba(24, 24, 24,0.3)',
                'rgba(24, 24, 24,0.3)'
            ],
            hoverOffset: 4
        }],
        options: {
            elements: {
              center: {
              }
            }
    }
};

var config2 = {
            type: 'doughnut',
            data: data,
};

Chart.pluginService.register({
  beforeDraw: function(chart) {
    var width = chart.chart.width,
        height = chart.chart.height,
        ctx = chart.chart.ctx;
        type = chart.config.type;
        
        var readmore = document.getElementById('readM');
        var pad;
        if(readmore == 'http://localhost/Group_CS21/root/member/schedule.php'){
          pad=30;
        }else{
          pad=20;
        }

    if (type == 'doughnut'){
      ctx.restore();
      var fontSize = (height / 114).toFixed(2);
      ctx.font = fontSize + "em Arial";
      ctx.textBaseline = "middle";

      var text = "25%",
          textX = Math.round((width - ctx.measureText(text).width) / 2),
          textY = (height / 2)+pad;

      ctx.fillText(text, textX, textY);
      ctx.save();
    } 
  }
}); 