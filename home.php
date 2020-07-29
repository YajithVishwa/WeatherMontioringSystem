<?php
include 'connection.php';
$con = OpenCon("yajith");
if(! $con)
{
    die('Connection Failed'.mysqli_error());
	
}
$sql="SELECT `humidity`,`temp` FROM `tempurature` ORDER BY`date` DESC LIMIT 1";
$result=mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
$temperature=$row['temp'];
$humidity=$row['humidity'];
}

?>

<!DOCTYPE html>
<html>
<title>HOME</title>
<link rel="shortcut icon" href="image/logo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/theme-blue-grey.css">
<link rel="stylesheet" href="css/spinner.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<body class="w3-theme-l5">

<!-- Navbar -->

<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">HOME</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="emergency">EMERGENCY</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="STATUS">STATUS</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Peak Weather</h4>
         <p class="w3-center">
		 <img src="image/extreme_weather	.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar">
		 
</p>
         <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="far fa-snowflake				 fa-fw w3-margin-right"></i> Humidity</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fas fa-cloud-rain fa-fw w3-margin-right"></i> Rain</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="	fas fa-cloud-moon fa-fw w3-margin-right"></i> Clouds</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          
          <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="far fa-sun	fa-fw w3-margin-right"></i> Sun</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          
          <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fas fa-temperature-high	 fa-fw w3-margin-right"></i>Temperature</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo5')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fas fa-cloud-sun	 fa-fw w3-margin-right"></i>Pressure </button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
      
       </div>
      </div>
      <br>
      </div>
      </div>
      <br>
      
      
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>HelpLine!</strong></p>
        <p>Contact ....... in case of an emergency.<br>
		<table>
		<tr><td>State emergency </td><td>: 044-1070</td></tr>
		<tr><td>Fire </td><td>: 101</td></tr>
		<tr><td>Ambulance </td><td>: 108</td></tr>
		<tr><td>Collector </td><td>: 044-2345</td></tr>
		</table>
		
		</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
			   <div class="container">
  <img src="image/sunny.jpg" alt="Snow" style="width:100%;">
 <div  style=" position: absolute;  top:48%; left:51%;  transform: translate(-50%, -50%);color:white;font-size:30px">&#8451;</div>
  <div  style=" position: absolute;  top:50%; left:50%;  transform: translate(-50%, -50%);color:white;font-size:70px"><?php echo $temperature?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
  <div  style=" position: absolute;  top:58%; left:50%;  transform: translate(-50%, -50%);color:white;font-size:40px;text-shadow: 2px 2px #805500;">Clear, sunny sky
</div>
             </div>
          </div>
        </div>
      </div>
       <div class="w3-container w3-card w3-white w3-round w3-margin "><br>
        <img src="https://s3-ap-southeast-1.amazonaws.com/assets.skyfilabs.com/images/blog/temperature-monitoring.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">Celcius</span>
        <h4>Temperature<p align="right"><?php echo $temperature?></p></h4>
		<br>      
		<table>
		<tr><td width="50%"><h4>
		<img src="https://s3-ap-southeast-1.amazonaws.com/assets.skyfilabs.com/images/blog/temperature-monitoring.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
		Temperature</h4></td><td width="50%" align="right"><p ><?php echo $temperature?></p></td></tr>
		</table> </div> 
       
       <div class="w3-container w3-card w3-white w3-round w3-margin "><br>
        <img src="image/pressure.png" alt="Avatar" class="w3-left  w3-margin-right" style="width:50px">
        <span class="w3-right w3-opacity">Celcius</span>
        <h4>&nbsp;&nbsp;Pressure</h4><br>
       </div>            
       
       
       <div class="w3-container w3-card w3-white w3-round w3-margin "><br>
        <img src="image/humidity.png" alt="Avatar" class="w3-left  w3-margin-right" style="width:50px">
        <span class="w3-right w3-opacity">Celcius</span>
        <h4>&nbsp;Humidity</h4><br>
       </div>           
       
       
          
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
   <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Emergency</p>
          <img src="image/severe-weather.png" alt="Forest" style="width:100%;">
          <p><button class="w3-button w3-block" style="background-color:red;color:white">ALERT</button></p>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Status of the sensor..</p>
          <p style=" font-size:40px;color:green;" >30
		  /
		  30
		  <b style=" font-size:20px;color:green;" >Actively working</b></p>
		  
          </div>
      </div>
      <br>
      
      
      
    <!-- End Right Column -->
    </div>
     
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->

<footer class="w3-container w3-theme-d5 w3-center">
  <p>Powered by TCE</p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 
