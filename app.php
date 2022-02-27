<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/dist/icons/favicon.png"/>
  
  <title>Locate Me</title>
  <!-- CSS BOOTSTRAP -->
<link rel="stylesheet" type="text/css" href="assets/dist/css/preloader.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/toggle.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/stylemysheet.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/font-awesome-animation.css">
<script type="text/javascript" src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.4/html2canvas.min.js"></script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=6963e4d99b1f4a62bc3d927ba8ad2d83&callback=initMap">
</script>
</head>
<body>
<header class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal"><a class="navbar-brand" href="index.php"><img height="250" width="250" class="img-fluid mx-auto d-block" src="assets/img/LM2.png" alt="logo"></a></p>
  <nav class="my-2 my-md-0 me-md-3">

 
    <!-- <a class="p-2 text-success" href="#"> <i class="fa fa-map-marker"></i> Locate Me</a>
    <a class="p-2 text-success" href="#">Support</a> 
    <a class="p-2 text-success" href="#"> <i class="fa fa-info"></i> About us</a> -->

  </nav>

<!--
  <a class="btn btn-outline-primary" href="#">Sign up</a>
-->
</header>
 
<!--
<button type="button" style="float: left;" onclick="myFunction()"  class="btn btn-default"><h3><i class="fa fa-toggle-on faa-fade animated faa-slow"></i></h3></button>
-->
<script>
function capture () {
  html2canvas(document.body).then((canvas) => {
    let a = document.createElement("a");
    a.download = "Locate_me_here.png";
    a.href = canvas.toDataURL("image/png");
    a.click();
  });  
}
</script>
<br><br>
<img src="assets/img/locata.png" height="350" width="350" class="img-fluid mx-auto d-block" alt="Image coming soon">
<br><br>
<br>
<br>
<center>
  <input type="button" class="btn btn-block" style="background-color:#212529; color:#96be33; font-type:Bold;" value="Capture Dis Place i Dey Now" onclick="capture()"/></center>
<br>
<div class="wrapper">
    <div class="info"></div>
</button>
    <div class="fetchLocation">
        <button class="btn btn-block" onclick="getLocation()">See Where I Dey Now Now
        <i class="fa fa-thumb-tack" aria-hidden="false"></i>
</button>
</div>
<div class="reload">
    <button class="btn btn-block" onclick="reloadPage()">Abeg Try Again
    <i class="fa fa-refresh" aria-hidden="true"></i>
</button>
</div>
</div>
<br />
<script type="text/javascript" src="assets/dist/js/locata.js"></script>
<?php include('./footer.php'); ?>
</body>
</html>
