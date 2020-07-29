$(document).ready(function(){
  $.ajax({
    url : "http://localhost/sastra/temp/followersdata.php",
    type : "GET",
    success : function(data){
      console.log(data);

      var temp = [];
      var date = [];
      for(var i in data) {
        temp.push("UserID " + data[i].temp);
        date.push(data[i].date);
        
      }

      var chartdata = {
        labels: temp,
        datasets: [
          {
            label: "date",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor: "rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: date
          },
          
        ]
      };

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata
      });
    },
    error : function(data) {

    }
  });
});