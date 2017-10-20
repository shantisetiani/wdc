<?php include 'header.php';?>
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script src="assets/js/highcharts.js"></script>

		<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'area',
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Student GPS graph',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories: ['1st Semester', '2nd Semester', '3rd Semester','4th Semester','5th Semester','6th Semester']
            },
            yAxis: {
                title: {
                    text: 'Nilai Mahasiswa'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y ;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series: [{
                name: 'Nilai',
                data: [3.02, 3.48,3.22,3.72,3.77,3.5]
            },{
                name: 'Syarat Lulus',
                data: [2, 2,2,2,2,2]
            }]
        });
    });
    
});
		</script>
	</head>


<br><br><br><br>
<div id="container" style="width: 800px; height: 400px; margin: 0 auto"></div>





<?php include 'footer.php';?>