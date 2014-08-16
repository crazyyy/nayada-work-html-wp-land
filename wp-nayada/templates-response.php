<?php query_posts("p=28"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>