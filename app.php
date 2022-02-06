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

</head>
<body>
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal"><a class="navbar-brand" href="index.php" style="color: white;"><img src="assets/img/lm2.png" alt="logo"></a></p>
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
<br><br>
<img src="assets/img/locata.png" height="350" width="350" class="img-fluid mx-auto d-block" alt="Image coming soon">
<br><br>
<div class="wrapper">
    <div class="info"></div>
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
<script type="text/javascript" src="assets/dist/js/locata.js"></script>
<?php include('footer.php'); ?>
</body>
</html>
