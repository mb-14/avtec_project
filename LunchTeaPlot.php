<?php include 'LunchTeaDataForPlot.php';?>
<!DOCTYPE html>
<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      var LunchTea_Endtime = <?php echo json_encode($EndTime1); ?>;
      var LunchTea_duration = <?php echo json_encode($Duration1); ?>;

function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Lunch or Tea Endtime');
        data.addColumn('number', 'Duration of Lunch Tea (min)');
       for(var i=0; i<LunchTea_duration.length;i++){
        data.addRows([
          [LunchTea_Endtime[i], LunchTea_duration[i]]
        ]);
    }

        // Set chart options
        var options = {'title':'Time for Lunch or Tea',
                       'width':1200,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>