<?php
    $active = "class=active";
?>

<div id="ribbon">&nbsp;</div>
<div id="social_links">
	<a href="https://www.youtube.com/channel/UCsQixMJh2oCyuBjVVv5wdZA" target="_blank"><img src="images/youtube-icon.png" alt="Youtube"></a>
	<a href="https://www.facebook.com/DoggiieDogWorld" target="_blank"><img src="images/fb_icon.png" alt="Facebook"></a>
	<a href="http://instagram.com/Doggiiedogworld" target="_blank"><img src="images/instagram_icon.png" alt="Instagram"></a>
</div>

<header>
	<div class="hsi-bar">
	<img src="images/Badges-01.png" />
	<div class="hsi-content">
	<p>Help HSI Save Our Furry Friends In Nepal</p>
	<span> To Find Out More: <a href="http://www.hsi.org/world/india/" target="_blank">Click Here</a></span>
	<span>Foreign Citizens: <a href="http://bit.ly/1OOa4YN" target="_blank">Donate Here</a></span>
	<span>Indian Citizens: <a href="http://ketto.org/skfmyoforanimals" target="_blank">Donate Here</a></span>
	</div>
	</div>
	<nav>
		<div class="menus">
			<div class="main">
				<ul>
					<li <?php if($current=="about") echo $active; ?>>
						<a href="about-us.php">About Us</a>
						<div style="margin-right:0px;width:104%;"><a href="about-us.php"><img src="images/icon_about.png"></a></div>
					</li>
					<li style="margin-right:40px" <?php if($current=="facilities") echo $active; ?>>
						<a href="facilities.php">Facilities</a>
						 <ul>
							<li style="margin-top:6px">
								<a href="grooming.php">GROOMING</a>
							</li>
							<li>
								<a href="splash-pool-fun.php">SPLASH POOL FUN</a>
							</li>
							<li>
								<a href="obedience-training.php">OBEDIENCE TRAINING</a>
							</li>
							<li>
								<a href="day-care.php">DAY CARE / BOARDING</a>
							</li>
						</ul>
						<div><a href="facilities.php"><img src="images/icon_facilities.png"></a></div>
					</li>
					<li style="margin-right:190px" <?php if($current=="gallery") echo $active; ?>>
						<a href="gallery.php">Gallery & Videos</a>
						<ul>
							<li style="margin-top:6px">
								<a href="gallery.php">GALLERY</a>
							</li>
							<li>
								<a href="videos.php">VIDEOS</a>
							</li>
						</ul>
						<div><a href="gallery.php"><img src="images/icon_gallery.png"></a></div>
					</li>
					<li style="margin-right:50px" <?php if($current=="news-media") echo $active; ?>>
						<a href="news-media.php">News & Media</a>
						<ul style="left:0px">
							<li style="margin-top:6px">
								<a href="news-media.php">Media</a>
							</li>
							<li>
								<a href="publication.php">Publication</a>
							</li>
							<li>
								<a href="testimonials.php">Testimonials</a>
							</li>
						</ul>
						<div><a href="news-media.php"><img src="images/icon_news.png"></a></div>
					</li>
					<li <?php if($current=="blog") echo $active; ?>>
						<a href="blog/">Blog</a>
						<div><a href="blog/"><img src="images/icon-blog.png"></a></div>
					</li>
					<li  style="margin-right:50px" <?php if($current=="contact") echo $active; ?>>
						<a href="contact-us.php">Contact Us</a>
						<div><a href="contact-us.php"><img src="images/icon_contact.png"></a></div>
					</li>
				</ul>
				<div id="logo"><a href="index.php" style="opacity:1"><img src="images/logo.png" alt="Logo"></a></div>
			</div>
		</div>
	</nav>
</header>