<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<!-- to include css file -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/aloginstyle.css');?>">
</head>
<header>
<nav class="navbar navbar-inverse">
   <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
  </div>
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <center><img class="img-responsive" src="<?php echo base_url()?>images/logo.png" alt="logo" height="50px">Taste That last forever!!!</center>
    </div>
  </div>
</nav>

</header>
<section ng-app="myApp">

	<script type="text/javascript" src="<?=base_url()?>assets/js/app.js"></script>

	<?php $this->load->view($view); ?>

</section>
<footer class="container-fluid text-center">
 <p><center>Copyright@</center></p>
</footer>
</html>