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
	    
  	<article class="delivery-price">
		<div class="inner clearfix">
			<h6>Доставка и цены</h6>
			<h2>Заказывать воду ТМ “Наяда” домой или в офис действительно удобно, потому что:</h2>
			<div class="wide-block">
				<ul class="clearfix">
					<li>
						<h5>Контроль качества</h5>
						<p>Регулярные замеры показателей продукта. Уникальная технология очистки.</p>
					</li>
					<li>
						<h5>Служба доставки</h5>
						<p>Наши экспедиторы поднимут бутыли на любой этаж, даже если в вашем доме нет лифта.</p>
					</li>
					<li>
						<h5>Без выходных</h5>
						<p>Наша служба доставки работает с 8 до 18 в будни и с 9 до 17 по выходным.</p>
					</li>
					<li>
						<h5>15 лет опыта</h5>
						<p>Год за годом мы совершенствуемся и создаем лучшую компанию по доставке воды.</p>
					</li>
				</ul>
			</div><!-- wide-block -->
			<div class="left-block">
				<h3>Стоимость доставки воды</h3>
				<p>Вы звоните или оставляете заказ на нашем сайте, и наши экспедиторы, доставят воду в удобное для Вас время, прямо к двери квартиры или офиса. <br>
				Для доставки  был выбран 19,5л формат баллона.</p>
				<p class="price-quantity">1 баллон<span>24 грн.</span></p>
				<p class="price-quantity">2 и более<span>22 грн.</span></p>
				<p class="gray">Залоговая стоимость за один балон составляет 70 грн. и возвращается в полном объеме при возврате баллона без повреждений</p>
				<a href="" class="order button-orange">ЗАКАЗАТЬ</a>
			</div><!-- left-block -->
			<div class="right-block">
				<h3>Что входит в стоимость воды?</h3>
				<ul>
					<li><span>1</span><p>безупречное качество воды, подтверждено сертификатами</p></li>
					<li><span>2</span><p>контроль каждой партии воды</p></li>
					<li><span>3</span><p>удобная и своевременная доставка с самого утра до позднего вечера</p></li>
					<li><span>4</span><p>сбалансированный минеральный состав</p></li>
					<li><span>5</span><p>автоматическая мойка бутылей</p></li>
					<li><span>6</span><p>обогащение воды кислородом</p></li>
					<li><span>7</span><p>обеззараживание воды ультрафиолетом и озоном</p></li>
				</ul>
			</div><!-- right-block -->
		</div><!-- inner -->
	</article><!--  delivery-price --> 
	
	<article class="equipment">
		<div class="inner clearfix">
			<h6>Оборудование</h6>
			<h3>С оборудованием для разлива бутылированной воды пить воду “Наяда” и “Наяда 7,4” еще комфортнее</h3>
			<ul class="clearfix">
				<li>
					<span><img src="img/equipment-1.jpg" alt=""></span>
					<h5>Минимальный</h5>
					<p class="price">800 грн. </p>
					<p>Настольный кулер для разлива бутылированной воды</p>
					<p>Горячая вода
						Мощность 550Вт
						Резервуар 1,3л
						Температура нагрева 85-95°С
						Производительность 5 л/час
						Бак из нержавеющей стали</p>
					<p>Холодная вода
						Мощность 85Вт
						Резервуар 1,2л (10-15°С)
						Производительность 0,5 л/час
						Бак из пищевого пластика
						Тип охлаждения электронный</p>
				</li>
				<li>
					<span><img src="img/equipment-2.jpg" alt=""></span>
					<h5>Оптимальный</h5>
					<p class="price">1400 грн.</p>
					<p>Бесшумный напольный кулер оборудованный шкафчиком</p>
					<p>Горячая вода
						Мощность 550Вт
						Резервуар 1,3л
						Температура нагрева 85-95°С
						Производительность 5 л/час
						Бак из нержавеющей стали</p>
					<p>Холодная вода
						Мощность 85Вт
						Резервуар 4л (5-10°С)
						Производительность 2 л/час
						Бак из нержавеющей стали
						Компрессорное охлаждение
						Хладагент R134a</p>
				</li>
				<li>
					<span><img src="img/equipment-3.jpg" alt=""></span>
					<h5>Идеальный</h5>
					<p class="price">2800 грн.</p>
					<p>Бесшумный кулер с нижней загрузкой бутыля и подсветкой</p>
					<p>Горячая вода
						Мощность 500 Вт
						Резервуар 1,3л (85-95°С)
						Производительность 5 л/ч
						Бак из нержавеющей стали
						Защита от детей на кране. </p>
					<p>Холодная вода
						Мощность 85 Вт
						Резервуар 4л (5-10°С)
						Производительность 2 л/час
						Хладагент R134a
						Комнатная вода</p>
				</li>
				<li>
					<span><img src="img/equipment-4.jpg" alt=""></span>
					<h5>Диспенсеры</h5>
					<p class="price">от 75 грн.</p>
					<p>Керамический диспенсер используется для дозирования питьевой бутилированной воды.</p>
					<img src="img/equipment-4-2.jpg" alt="">
					<p><strong>Помпы</strong></p>
					<p>Керамический диспенсер используется для дозирования питьевой бутилированной воды.</p>
				</li>
			</ul>
			<div class="wide-contact">
				<p>По вопросам цены и оборудования можете обращаться к нам по телефону</p>
				<a href="tel:+380567980627">(056) 798-06-27</a>
				<p class="grey">Указанные на сайте цены предназначены для ознакомления и не являются публичной офертой. Внешний вид товара и его комплектация могут незначительно отличаться от изображения на фотографии.</p>
			</div><!-- wide-contact -->
		</div><!-- inner -->
	</article><!-- equipment -->
    
  	<article class="actions">
		<div class="inner">
			<h6>Акции</h6>
			<div class="actions-slider clearfix">
				<h5>Пейте щелочную воду</h5>
				<p>Приобщайтесь к тайнам долголетия вместе с Наядой</p>
				<a href="" class="order button-orange">ЗАКАЗАТЬ</a> <a href="" class="detailed button-transparent">ПОДРОБНЕЕ</a>
				<div class="battles"></div><!-- battles -->
			</div><!-- actions-slider -->
			<ul class="clearfix">
				<li>
					<img src="img/actions-1.jpg" alt="">
					<h5>Лучшее - детям!</h5>
					<p>Нашим детям необходимо внимание и забота, поэтому всем детским учреждениям мы предоставляем специальную цену на питьевую воду «Наяда» – 21 грн.</p>
				</li>
				<li>
					<img src="img/actions-2.jpg" alt="">
					<h5>Будем знакомы</h5>
					<p>Подарок, как для клиентов, так и для их друзей, знакомых и близких, которые станут так же нашими клиентами. Познакомьте Ваших родственников, знакомых с нашими возможностями и получите в подарок 1 баллон воды.</p>
				</li>
				<li>
					<img src="img/actions-3.jpg" alt="">
					<h5>Скидка для пенсионеров</h5>
					<p>Вы пенсионер? <br>Для Вас один баллон воды «Наяда» стоит 22 грн.</p>
				</li>
			</ul>
		</div><!-- inner -->
	</article><!-- actions -->

	<article class="productions">
		<div class="inner">
			<h5>Производство</h5>
			<p class="descr">Завод по производству питьевой воды «Наяда» оснащен современным оборудованием в сфере очистки и обеззараживания воды. На каждом этапе очистки введен пошаговый контроль качества, соответствующий современным мировым стандартам</p>
			<ul class="clearfix">
				<li>
					<h4>Предварительная очистка</h4>
					<p>Происходит удаление взвешенных и коллоидных частиц,органических веществ,нефтепродуктов,хлора и других загрязнителей</p>
				</li>
				<li>
					<h4>Обратный осмос</h4>
					<p>Лучший из известных способов фильтрации. Этот процесс позволяет удалять из воды даже маленькие частички размером с ионы</p>
				</li>
				<li>
					<h4>Обеззараживание ультрафиолетом и озоном</h4>
					<p>Уничтожает возбудителей таких инфекционных болезней, как тиф, холера, дизентерия, вирусный гепатит, полиомиелит и др. Позволяет добиться более эффективного обеззараживания, чем хлорирование, особенно в отношении вирусов</p>
				</li>
				<li>
					<h4>Обогащение кислородом</h4>
					<p>Обогащенная кислородом вода способствует выведению токсических веществ, повышает жизненный тонус и нормализует обменные процессы. Растворенный в ней кислород прекрасно усваивается при ее употреблении организмом</p>
				</li>
			</ul>
			<div class="bottom-two clearfix">
				<div>
					<h5>Автоматическая мойка бутылей</h5>
					<p>Производится под большим давлением, дезинфицирующими растворами пищевого типа при температуре 60 градусов. После чего баллон ополаскивается водой "Наяда" перед этапом разлива</p>
				</div>
				<div>
					<h5>Безопасное хранение</h5>
					<p>Подача кристально чистой воды в накопительные емкости, которые изготовлены из нержавеющей стали пищевого сорта, так как пластик допустим только для транспортировки и краткосрочного хранения</p>
				</div>
			</div><!-- bottom-two -->
		</div><!-- inner -->
	</article><!-- productions -->
    
  	<article class="aboutus">
		<div class="inner">
			<h6>О нас</h6>
  			<h5>Сертификат соответствия</h5>
  			<a href="" class="sertificate"><img src="img/sertificate-small.jpg" alt=""><span></span></a>
  			<h4 class="avards">Награды TM “Наяда”</h4>
  			<ul class="avards clearfix">
  				<li><a href="#"><img src="img/avards-1.jpg" alt=""></a></li>
  				<li><a href="#"><img src="img/avards-2.jpg" alt=""></a></li>
  				<li><a href="#"><img src="img/avards-3.jpg" alt=""></a></li>
  				<li><a href="#"><img src="img/avards-4.jpg" alt=""></a></li>
  				<li><a href="#"><img src="img/avards-5.jpg" alt=""></a></li>
  				<li><a href=""><img src="img/avards-6.jpg" alt=""></a></li>
  			</ul><!-- avards -->
			<h4 class="comments">Лучше всех о нас могут рассказать только наши клиенты</h4>
			<ul class="clearfix client-response">
				<li>
					<p>Я хочу выразить благодарность водителю, который делал мне сегодня доставку. Его предупредили, что лифт не работает, я живу на 8-ом этаже, а он все равно поднял воду в квартиру. Очень довольна его работой!</p>
					<span class="name">НАДЕЖДА, КЛИЕНТ С 2011 Г.</span>
				</li>
				<li>
					<p>Очень довольна вашим сервисом и тем, что вода очень хорошего качества. Мы с февраля ни разу не мыли чайник, потому что нет налета, и к тому же, очень довольны вашим отношением к нам, как к клиентам, когда нужна помощь по оборудованию, замене или просто по заказу.</p>
					<span class="name">ТАТЬЯНА, КЛИЕНТ С 2012 Г.</span>
				</li>
				<li>
					<p>Ребята, спасибо! Мой призыв о скорейшей доставке был воспринят буквально. Качество воды – 10 из 10. Сервис оценить невозможно!</p>
					<span class="name">ВАЛЕНТИН, КЛИЕНТ С 2011 Г.</span>
				</li>
				<li>
					<p>Выражаю благодарность водителю, который приехал утром на 20 минут раньше, и я не опоздала на работу. Хочу поблагодарить ваших водителей за то, что они всегда доставляют воду утром, как я и прошу, без опозданий. С вами приятно работать. Супер, молодцы!</p>
					<span class="name">ЕЛЕНА, КЛИЕНТ С 2011 Г.</span>
				</li>
			</ul><!-- client-response -->
		</div><!-- inner -->
	</article>  <!-- aboutus -->  
	
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
