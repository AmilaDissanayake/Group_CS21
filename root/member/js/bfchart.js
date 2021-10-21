AOS.init();
// Chart.defaults.global.defaultFontFamily = "Rubic";
 Chart.defaults.fontSize = 16;
 var chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    grey: 'rgb(231,233,237)'
 };

var randomScalingFactor = function() {
    return (Math.random() > 0.5 ? 2.0 : 1.0) * Math.round(Math.random() * 100);
}


var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var config3 = {
    type: 'line',
    data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
    label: "Body Fat value",
    backgroundColor: "rgba(134, 255, 113, 0.5)",
    borderColor: "#86ff71",
    data: [38, 35, 32, 31, 30, 28, 25],
    fill: true,
    }, ]
},
options: {
responsive: true,
maintainAspectRatio: true,
title: {
    text: 'Body Fat Analysis',
    fontSize: 19,
    fontStyle: '600',
    fontColor: 'rgba(240,250,237,1)',
    padding: 10,
    display: true
},


legend: {
    display: false
},
scales: {
    yAxes: [{
        ticks: {
            beginAtZero: false,
        },
        gridLines: {
            display: true,
            zeroLineColor: 'green',
            color: "#e6e6e644",
            lineWidth: 1
         }
    }],
    xAxes: [{
        ticks: {
            beginAtZero: false
        },
        gridLines: {
            display: true,
            color: "#e6e6e644",
            lineWidth: 1
         }
    }]
 }
}
};