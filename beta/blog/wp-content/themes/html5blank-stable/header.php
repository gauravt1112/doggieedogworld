<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=960">
		<meta name="format-detection" content="telephone=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
<div id="ribbon">&nbsp;</div>
<div id="social_links">
	<a href="https://www.youtube.com/channel/UCsQixMJh2oCyuBjVVv5wdZA" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.png" alt="Youtube"></a>
	<a href="https://www.facebook.com/DoggiieDogWorld" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/fb_icon.png" alt="Facebook"></a>
	<a href="http://instagram.com/Doggiiedogworld" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram_icon.png" alt="Instagram"></a>
</div>
			
<header>
	<div class="hsi-bar">
	<img src="<?php echo get_template_directory_uri(); ?>/images/Badges-01.png" />
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
						<a href="http://www.doggiiedogworld.com/about-us.php">About Us</a>
						<div style="margin-right:0px;width:104%;"><a href="http://www.doggiiedogworld.com/about-us.php"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_about.png"></a></div>
					</li>
					<li style="margin-right:40px" <?php if($current=="facilities") echo $active; ?>>
						<a href="http://www.doggiiedogworld.com/facilities.php">Facilities</a>
						 <ul>
							<li style="margin-top:6px">
								<a href="http://www.doggiiedogworld.com/grooming.php">GROOMING</a>
							</li>
							<li>
								<a href="http://www.doggiiedogworld.com/splash-pool-fun.php">SPLASH POOL FUN</a>
							</li>
							<li>
								<a href="http://www.doggiiedogworld.com/obedience-training.php">OBEDIENCE TRAINING</a>
							</li>
							<li>
								<a href="http://www.doggiiedogworld.com/day-care.php">DAY CARE / BOARDING</a>
							</li>
						</ul>
						<div><a href="http://www.doggiiedogworld.com/facilities.php"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_facilities.png"></a></div>
					</li>
					<li style="margin-right:190px" <?php if($current=="gallery") echo $active; ?>>
						<a href="http://www.doggiiedogworld.com/gallery.php">Gallery & Videos</a>
						<ul>
							<li style="margin-top:6px">
								<a href="http://www.doggiiedogworld.com/gallery.php">GALLERY</a>
							</li>
							<li>
								<a href="http://www.doggiiedogworld.com/videos.php">VIDEOS</a>
							</li>
						</ul>
						<div><a href="http://www.doggiiedogworld.com/gallery.php"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_gallery.png"></a></div>
					</li>
					<li style="margin-right:50px" <?php if($current=="news-media") echo $active; ?>>
						<a href="http://www.doggiiedogworld.com/news-media.php">News & Media</a>
						<ul style="left:0px">
							<li style="margin-top:6px">
								<a href="http://www.doggiiedogworld.com/news-media.php">Media</a>
							</li>
							<li>
								<a href="http://www.doggiiedogworld.com/publication.php">Publication</a>
							</li>
							<li>
								<a href="http://www.doggiiedogworld.com/testimonials.php">Testimonials</a>
							</li>
						</ul>
						<div><a href="http://www.doggiiedogworld.com/news-media.php"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_news.png"></a></div>
					</li>
					<li <?php if($current=="blog") echo $active; ?>>
						<a href="http://www.doggiiedogworld.com/blog/">Blog</a>
						<div><a href="http://www.doggiiedogworld.com/blog/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-blog.png"></a></div>
					</li>
					<li  style="margin-right:50px" <?php if($current=="contact") echo $active; ?>>
						<a href="http://www.doggiiedogworld.com/contact-us.php">Contact Us</a>
						<div><a href="http://www.doggiiedogworld.com/contact-us.php"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_contact.png"></a></div>
					</li>
				</ul>
				<div id="logo"><a href="http://www.doggiiedogworld.com/index.php" style="opacity:1"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"></a></div>
			</div>
		</div>
	</nav>
</header>
			<!-- /header -->
