google.load("visualization", "1", {packages:["corechart"]});

function elextern_chart() {
  ajax_co2();

  $.ajax({
    type: "POST",
    data: $('#form-basic').serialize(),
    url: 'ajax_chart.php',
    datatype: 'json',
    success: function(data, textStatus, xhr) {      
      var data = new google.visualization.DataTable(data);
      
      var options = {
        width: '100%',
        height: '450',
        colors: ['#009AC7', '#0054A4', '#103E68', '#EA9000', '#864B96', '#57A87A', '#C10300'],
        hAxis: {showTextEvery: 1, slantedText:true,  slantedTextAngle:45, title: 'Energy Sources'},
        vAxis: {title: 'Costs', showTextEvery: 4, format: '# €/MWh', 
          viewWindow: {min: 0, max: 'auto'}
        },
        legend: { position: 'none', maxLines: 3 },
	bar: { groupWidth: '50%' },
        backgroundColor: { fill:'transparent' },
        chartArea: {
            left: 100,
            top: 40,
            width: '100%',
            height: '280'
        },
        isStacked: true
      };
      
      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  });
}