<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

	<!-- dns prefetch -->
	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<!-- meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- icons -->
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

	<!-- css + javascript -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	<script>
	!function(){
		// configure legacy, retina, touch requirements @ conditionizr.com
		conditionizr()
	}()
	</script>
</head>
<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a rel="nofollow" href="http://browsehappy.com/">upgrade your browser</a> or <a rel="nofollow" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
<div id="wrapper">
<header class="clearfix">
	<div class="inner slider-container">
		<?php echo get_new_royalslider(1); ?>
	</div><!-- slider-container -->
	<nav class="headernav" role="navigation">
		<div class="blue-bg"></div>
		<div class="inner">
			<div id="header">
				<div class="logo-block">
					<div class="choise_city">
						<h6 class="city">Днепропетровск</h6>
						<span class="test_phone"><a href="tel:+380567980627">(056) 798-06-27</a></span>
					</div><!-- choise_city -->
				</div><!-- logo-block -->
				<?php wpeHeadNav(); ?>
			</div>	<!-- header -->
		
			<div id="staticHeader" style="display:none">
				<div class="logo-block">
					<div class="choise_city">
						<h6 class="city city_dubl">Днепропетровск</h6>
						<span class="test_phone work_phone"><a href="tel:+380567980627">(056) 798-06-27</a></span>
					</div><!-- choise_city -->
				</div><!-- logo-block -->
				<?php wpeHeadNav(); ?>
			</div><!-- staticHeader -->
		</div><!-- inner -->
	</nav>
</header>
<section role="main" class="clearfix">

	<?php get_template_part('templates-about-water'); ?>

	<?php get_template_part('templates-delivery-price'); ?>

	<?php get_template_part('templates-equipment'); ?>

	<?php get_template_part('templates-actions'); ?>

	<?php get_template_part('templates-productions'); ?>

	<?php get_template_part('templates-aboutus'); ?>

	<?php get_template_part('templates-response'); ?>
	
</section>
</div><!-- #wrapper -->
<footer class="wrapper">
	<div class="mainfooter">
	</div><!-- mainfooter -->
</footer>

<div class="recall-modal modal-wind">
	<p class="title">ОБРАТНЫЙ ЗВОНОК</p>
	<?php echo do_shortcode('[contact-form-7 id="77" title="Обратный звонок"]'); ?>
</div><!-- recall-modal modal-wind -->

<div class="client-modal modal-wind">
	<p class="title">ВАШ ОТЗЫВ</p>
	<?php echo do_shortcode('[contact-form-7 id="78" title="Добавить отзыв"]'); ?>
</div><!-- client-modal modal-wind -->

<div class="city-modal modal-wind">
	<h5>ВЫБЕРИТЕ ВАШ ГОРОД</h5>
	<button type="button" class="dnepr_city close1">ДНЕПРОПЕТРОВСК</button>
	<button type="button" class="dzerg_city close1">ДНЕПРОДЗЕРЖИНСК</button>
</div>

	<?php wp_footer(); ?>
	
	<!-- analytics -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)})(document,'script');
	</script>

</body>
</html>
