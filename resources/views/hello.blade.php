<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Line Chart</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    </head>
    <body>
    <div>
    <canvas id="canvas" width="400" height="400"></canvas>
        </div>
        <script type="text/javascript">
    var data = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [28,48,40,19,96,27,100]
            }
        ]
    };
    // Chart.defaults.global = {
    //   animationSteps : 50,
    //   tooltipYPadding : 16,
    //   tooltipCornerRadius : 0,
    //   tooltipTitleFontStyle : 'normal',
    //   tooltipFillColor : 'rgba(0,160,0,0.8)',
    //   animationEasing : 'easeOutBounce',
    //   scaleLineColor : 'black',
    //   scaleFontSize : 16
    // };
    // Chart.defaults.global.responsive = true;
    var ctx = document.getElementById('canvas').getContext('2d');
    var lineDemo = new Chart(ctx).Line(data);
    // 	, {
    //   responsive: true,
    //   pointDotRadius: 10,
    //   bezierCurve: false,
    //   scaleShowVerticalLines: false,
    //   scaleGridLineColor: 'black'
    // }
    // );
    </script>
    </body>
</html>