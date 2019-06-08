
<?php
	$current = "contact";
	include('includes/head.php');
?>
  
</head>

<body>

	<div class="wrapper">
		<?php include('includes/header.php');?>
	</div>


	<div class="wrapper">
		<div class="main">
			<div class="contact_left">
				<p class="title" style="font-size: 25px;">Tell us your tail!<br><br>
					<span style="font-size: 17px;">Contact us with your pet queries and help us help you give your munchkin a thera-paw-tic day!</span>
				</p>
				<form name="contact_form" id="contact_form" action="form_submit_contact.php" method="post">
				<p class="title">
					<span style="font-size: 17px; width:100%; float:left;">Contact Form</span>
				</p>
				<div id="contact-form-box">
				<input type="text" name="Name" placeholder="Name" class="required">
				<input type="text" name="Email" placeholder="Email" class="required email">
				<input type="text" name="Tel" placeholder="Phone" class="required number">
				</div>
				<div id="contact-form-box" style="margin-right: 0px;">
				<textarea name="Comments" rows="4" placeholder="Message" class="required"></textarea>
				<input type="submit" name="Submit" Value="Submit">
				</div>
				</form>
				<p class="address" style="font-size: 15px;margin-top: 5px;">Bunglow No. 81, SVP Nagar, Janki Devi School Lane, MHADA,<br> Andheri (W), Mumbai -53.<br><img src="images/phone_icon.png"> +91 22 2631 6991&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/phone_icon.png"> +91 91672 42218<br><img src="images/phone_icon.png"> pooja@doggiiedogworld.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/phone_icon.png"> info@doggiiedogworld.com</p>
			</div>
			<div class="contact_right">
				<p align="center"><img src="images/contact_img.jpg"></p>
			</div>
		</div>
	</div>

	<div class="wrapper">
		<?php include('includes/footer.php');?>
	<div class="wrapper">

	<?php include('includes/script-files.php');?>

</body>

</html>