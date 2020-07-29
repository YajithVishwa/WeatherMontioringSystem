<?php
include 'connection.php';
$con = OpenCon("yajith");
$page = $_SERVER['PHP_SELF'];
$sec = "30";
if(! $con)
{
    die('Connection Failed'.mysqli_error());
	
}
$values="SELECT `humidity`,`temp`,`distance` FROM `tempurature` ORDER BY`date` DESC LIMIT 1";
$result=mysqli_query($con,	$values);
while($row = mysqli_fetch_array($result)){
$temperature=$row['temp'];
$humidity=$row['humidity'];
$rainfall=$row['distance'];
}
//temp chart
$tchart="SELECT `day1`,`day2`,`day3`,`day4`,`day5`,`day6`,`day7` FROM `week`";
$tcresult=mysqli_query($con,$tchart);

while($row = mysqli_fetch_array($tcresult)){
$Ctemperature[0]=$row[0];
$Ctemperature[1]=$row[1];
$Ctemperature[2]=$row[2];
$Ctemperature[3]=$row[3];
$Ctemperature[4]=$row[4];
$Ctemperature[5]=$row[5];
$Ctemperature[6]=$row[6];

}

$tchart="SELECT `day1`,`day2`,`day3`,`day4`,`day5`,`day6`,`day7` FROM `hweek`";
$tcresult=mysqli_query($con,$tchart);
$i=0;
while($row = mysqli_fetch_array($tcresult)){
$Chumidity[0]=$row[0];
$Chumidity[1]=$row[1];
$Chumidity[2]=$row[2];
$Chumidity[3]=$row[3];
$Chumidity[4]=$row[4];
$Chumidity[5]=$row[5];
$Chumidity[6]=$row[6];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <title>Ramanan Rambers</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
        <h1 style="" class="text-light"><a href="index.php"><span>Smart Rain Gauge</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a style="font-size:20px;" href="index.php">Home</a></li>
       <!--   <li><a href="about.php">About Us</a></li>-->
          <li><a  style="font-size:20px;"  href="services.php">Emergency Services</a></li>
          <li><a  style="font-size:20px;" href="contact.php">Contact Us</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center bgimg">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image:url('hero-bg.png')">
        <div class="carousel-container">
          <h2 class="animated fadeInDown"> <span>Temperature</span></h2>
          <p class="animated fadeInUp"style="font-size:80px;"> <?php echo $temperature?>&#8451;</p>
          
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Humidity</h2>
        <p class="animated fadeInUp"style="font-size:80px;"> <?php echo $humidity?>%</p>
         <!--- <a href="" class="btn-get-started animated fadeInUp">Read More</a>--->
        </div>
      </div>


		<!-- Slide 4-->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Rain</h2>
          <p class="animated fadeInUp"style="font-size:80px;"> <?php echo $rainfall;?>mm</p>
        
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

	
	<div align="center" class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
                  <h2>
<?php

$date = date_default_timezone_set('Asia/Kolkata');

//If you want Day,Date with time AM/PM
echo $today = date("F j, Y");
echo "<br>";
//Get Only Current Time 00:00 AM / PM 
echo $today = date("g:i a");
?>
	</h2>
            </div>
          </div>
	
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
            <div class="icon"><img style="height:50px;width:80px;" src="temperature.png"></div>
              <h4 class="title"><a href="">Temperature</a></h4>
              <div  align="center"  style="width:220px;"><br>
              <p class="description" style="font-size:80px;">
			  <?php echo $temperature;?>&#8451;</p>	
			</div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><img style="height:50px;width:50px;" src="assets/img/humidity.png"></div>
              <h4 class="title"><a href="">Humidity</a></h4>
			  <div  align="center"  style="width:220px;"><br>
              <p class="description" style="font-size:80px;">
			  <?php echo $humidity;?>%</p>	
			</div>
       
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><img style="height:50px;width:50px;" src="assets/img/rain.png"></div>
              <h4 class="title"><a href="">Rainfall</a></h4>
              <div  align="center"  style="width:220px;"><br>
              <p class="description" style="font-size:70px;">
			  <?php echo $rainfall;?>mm</p>	
			</div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
                 <div class="icon"><img style="height:50px;width:50px;" src="assets/img/extreme-weather.png"></div>
              <h4 class="title"><a href="">Extreme Weather</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
<div align="center" >
<h2>TEMPERATURE</h2>
<div id="curve_chart" style="width: 900px; height: 500px"></div>
<h2>HUMIDITY</h2>
<div id="curve_chart_1" style="width: 900px; height: 500px"></div>
</div>
  </main><!-- End #main -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
 
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
<!-- chart -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Temperature'],
          
          
		  <?php
		  for($i=0;$i<sizeof($Ctemperature);$i++){
		  $j=$i+1;
		  echo "[$j,$Ctemperature[$i]],";
		  }
		  
		  ?>
        ]);

        var options = {
          title: 'This week',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
	 <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Humidity'],
          
          
		  <?php
		  for($i=0;$i<sizeof($Ctemperature);$i++){
		  $j=$i+1;
		  echo "[$j,$Chumidity[$i]],";
		  }
		  
		  ?>
        ]);

        var options = {
          title: 'This week',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_1'));

        chart.draw(data, options);
      }
    </script>
	<style type="text/css">
.bgimg {
    background-image: url('hero-bg.jpg');
}
</style>
</body>

</html>