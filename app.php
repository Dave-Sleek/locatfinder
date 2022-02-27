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
<div class="mapouter"><div class="gmap_canvas"><iframe width="425" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Ediba&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:425px;}</style><a href="https://www.embedgooglemap.net">build custom google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
<br />
<center><div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=world&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">build custom google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:425px;}</style></div></div></center>
<br />
<center><iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=3.4222412109375004%2C7.476857400769465%2C9.552612304687502%2C10.876464994816295&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/>
<small><a href="https://www.openstreetmap.org/#map=8/9.181/6.487">View Larger Map</a></small></center>
<script type="text/javascript" src="assets/dist/js/locata.js"></script>
<?php include('./footer.php'); ?>
</body>
</html>
