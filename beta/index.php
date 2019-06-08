<?php
	$current = "home";
	include('includes/head.php');
?>
  
</head>

<body>

	<div class="wrapper">
		<?php include('includes/header.php');?>
	</div>

	<div class="wrapper">
	<div class="cycle-slideshow"  id="homeSlider"
	    data-cycle-fx=fade
	    data-cycle-timeout=5000
	    data-cycle-slides="> div"
	    data-cycle-next="#next"
	    data-cycle-prev="#prev",
	    data-cycle-pager=".pager"
	    >
		  <div id="slider01">
		  	<p class="animated bounceInRight center">The Greatness Of A Nation And Its Moral<br>Progress Can Be Judged By The Way Its<br>Animals Are Treated.<br><span>- Mahatma Gandhi</span></p>
		  </div>
		  <div id="slider02">
		  	<p class="animated bounceInRight">If I had a pound for everytime my dog<br>made me smile, I'd be a Millionaire</p>
		  </div>
		  <div id="slider03">
		  	<p class="animated bounceInLeft">If you think dogs can't count, try putting<br>three dog biscuits in your pocket and then<br>giving your dog only two of them. </p>
		  </div>
		  <div id="slider04">
		  	<p class="center animated bounceInRight">The only escapes from the<br>miseries of life are music and cats.</p>
		  </div>
		  <div id="slider05">
		  	<p class="center animated bounceInDown">People that hate cats will come<br>back as mice in their next life.</p>
		  </div>
		</div>
	</div>
	<div class="pager"></div>

	<div class="wrapper">
		<?php include('includes/footer.php');?>
	<div class="wrapper">

	<?php include('includes/script-files.php');?>

</body>

</html>