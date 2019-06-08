
<?php
	$current = "facilities";
	include('includes/head.php');
?>
  
  <link type="text/css" href="css/bubble.css" rel="stylesheet" />
  <link type="text/css" href="css/style.css" rel="stylesheet" />
</head>

<body>

	<div class="wrapper">
		<?php include('includes/header.php');?>
	</div>

	<div class="wrapper" style="margin-bottom:40px">
		<div class="main">
		
		<a href="grooming.php"><img src="images/facilities/grooming.png" id="grooming_img" alt="Grooming"></a>
		<a href="splash-pool-fun.php"><img src="images/facilities/splash.png" id="splash_img" alt="Splash"></a>
		<a href="obedience-training.php"><img src="images/facilities/obidience.png" id="obidience_img" alt="Obidience"></a>
		<a href="day-care.php"><img src="images/facilities/day care.png" id="day_care_img" alt="day care"></a>
		<br/><br/>
		<p id="grooming_p">GROOMING</p>
		<p id="splash_p">SPLASH POOL FUN</p>
		<p id="obidience_p">OBIDIENCE TRAINING</p>
		<p id="day_care_p">DAY CARE BOARDING</p>
		</div>
	</div>
	<div class="wrapper">
		<?php include('includes/footer.php');?>
	<div class="wrapper">

	<?php include('includes/script-files.php');?>

</body>

</html>