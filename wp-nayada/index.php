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

	<nav class="headernav" role="navigation">
		<div class="blue-bg"></div>
		<div class="inner">
			<div id="header">
				<div class="logo-block"></div>
				<?php wpeHeadNav(); ?>
			</div>	<!-- header -->
		
			<div id="staticHeader" style="display:none">
				<div class="logo-block"></div>
				<?php wpeHeadNav(); ?>
			</div><!-- staticHeader -->
		</div><!-- inner -->
	</nav>
		<div class="inner">
			


		</div>
</header>
<section role="main" class="clearfix">

	<?php get_template_part('templates-about-water'); ?>

	<?php get_template_part('templates-delivery-price'); ?>

	<?php get_template_part('templates-equipment'); ?>

	<?php get_template_part('templates-actions'); ?>

	<?php get_template_part('templates-productions'); ?>

	<?php get_template_part('templates-aboutus'); ?>
	
	<article class="response">
		<div class="inner">
			<h6>ВАШЕ МНЕНИЕ ОЧЕНЬ ВАЖНО ДЛЯ НАС</h6>
			<a href="" class="leave-response button-transwhite">НАПИСАТЬ ОТЗЫВ</a>
			<ul class="clearfix">
				<li>
					<p>Вы звоните или оставляете заказ на нашем сайте, и наши экспедиторы, доставят воду в удобное для Вас время, прямо к двери квартиры или офиса. <br>Для доставки  был выбран 19,5л формат баллона.</p>
					<p class="price-quantity">1 баллон <span>24 грн.</span></p>
					<p class="price-quantity">2 и более <span>22 грн.</span></p>
				</li>
				<li>
					<h3>Диспетчерская служба в Днепропетровске</h3>
					<div class="phone-foot clearfix">
						<div>Понедельник – Пятница <br>
							8.00 – 18.00<br>
							Суббота – Воскресенье<br>
							9.00 – 17.00<br>
						</div>
						<div>
							<a href="tel:+380567980627">(056) 798-06-27</a>
							<br>
							<a href="">(067) 631-09-67</a>
							<br>
							<a href="">(063) 607-06-27</a>
							<br>
						</div>
					</div><!-- phone-foot -->
				</li>
			</ul>
		</div><!-- inner -->
	</article><!-- response -->

</section>
</div><!-- #wrapper -->
<footer class="wrapper">
	<div class="mainfooter">
	</div><!-- mainfooter -->
</footer>
	<?php wp_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
	
	<!-- analytics -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)})(document,'script');
	</script>
	
</body>
</html>
