function getChartData() {
    params="func=0";
	ajaxCall(params,"post","index.php",null,0,false,1,0,function(data){
       data=data.split('<%SEP%>');
       data[0] = eval('['+data[0]+']');
       data[1] = eval('['+data[1]+']');	
       drawChart(data[0], data[1]);
    });
}    

function drawChart(series, drilldown){
    $('#container').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Package Dependencies for <b>react-app</b>'
        },
    
        legend: {
            enabled: false
        },

        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                }
            }
        },

        series: series,
        drilldown: {
            series: drilldown
        },
        tooltip: {
            formatter: function () {
                return 'Dependencies for ' + this.series.name +
                    '</b>: <br/><b>' + this.point.name + '</b> has <b>' + this.y + '</b> dependencies';
            }
        },
    })
}
