<?php query_posts("p=22"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="delivery-price">
	<div class="inner clearfix">
		<h6><?php the_title(); ?></h6>
		<h2><?php the_field( "subtite" ); ?></h2>
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
			<h3><?php the_field( "bottom_left_title" ); ?></h3>
			<?php the_field( "bottom_left_shot_descr" ); ?>
			<p class="price-quantity"><?php the_field( "bottom_left_price_name_1" ); ?><span><?php the_field( "bottom_left_price_1" ); ?></span></p>
			<p class="price-quantity"><?php the_field( "bottom_left_price_name_2" ); ?><span><?php the_field( "bottom_left_price_2" ); ?></span></p>
			<p class="gray"><?php the_field( "bottom_left_shot_grey" ); ?></p>
			<a href="" class="order button-orange">ЗАКАЗАТЬ</a>
		</div><!-- left-block -->
		<div class="right-block">
			<h3><?php the_field( "bottom_right_title" ); ?></h3>
			<?php if( have_rows('bottom_right_list') ): ?>
			<ul>
			<?php while( have_rows('bottom_right_list') ): the_row(); 
    			$bottom_right_list_number = get_sub_field('bottom_right_list_number');
    			$bottom_right_list_text = get_sub_field('bottom_right_list_text');
	        ?>
				<li><span><?php echo $bottom_right_list_number; ?></span><p><?php echo $bottom_right_list_text; ?></p></li>
	        		<?php endwhile; ?>
	        	</ul>
	        	<?php endif; ?>
		</div><!-- right-block -->
	</div><!-- inner -->
</article><!--  delivery-price --> 

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>