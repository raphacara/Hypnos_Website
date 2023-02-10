$(document).ready(function(){
  $.ajax({
    url : "freq.php",
    type : "GET",
    success : function(data){
      console.log(data);

      var id = [];
      var freq_chart = [];
      var db_chart = [];
      var spo2_chart = [];

      for(var i in data) {
        id.push(data[i].id + "h");
        freq_chart.push(data[i].freq);
        db_chart.push(data[i].db);
        spo2_chart.push(data[i].spo2);
      }

      var chartdata = {
        labels: id,
        datasets: [
          {
            label: "freq",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor: "rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: freq_chart
          },
          {
            label: "db",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(29, 202, 255, 0.75)",
            borderColor: "rgba(29, 202, 255, 1)",
            pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
            pointHoverBorderColor: "rgba(29, 202, 255, 1)",
            data: db_chart
          },
          {
            label: "spo2",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(211, 72, 54, 0.75)",
            borderColor: "rgba(211, 72, 54, 1)",
            pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
            pointHoverBorderColor: "rgba(211, 72, 54, 1)",
            data: spo2_chart
          }
        ]
      };

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata,
        options: {
        scales: 
        {id: { title: { display: true, text: 'heure de la journée' }},
        y: {suggestedMin: 30, suggestedMax: 160, title: { display: true, text: 'fréquence cardiaque' }}},

        plugins: 
        {title: {display: true, text: 'Evolution de votre fréquence cardiaque'}},
        },
      });
    },
    error : function(data) {

    }
  });
});
    
