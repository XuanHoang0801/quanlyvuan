
 
 // Load the Visualization API and the piechart package.
 google.load('visualization', '1.0', {'packages':['corechart']});
 google.setOnLoadCallback(drawChart);

 function drawChart() {


   // Create the data table.
   var data = new google.visualization.DataTable();
   // Create columns for the DataTable
   data.addColumn('string');
   data.addColumn('number', 'Devices');
   // Create Rows with data
   data.addRows([
     ['SamSung', 21],
     ['Apple', 14],
     ['Huawei', 9],
     ['LG', 4],
     
   ]);
   //Create option for chart
   var options = {
     title: 'Thống kê vụ ',
     'width': 800,
     'height': 600
   };

   // Instantiate and draw our chart, passing in some options.
   var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
   chart.draw(data, options);
 }