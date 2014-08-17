<?php query_posts("p=26"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="actions" class="actions">
	<div class="inner">
		<h6>Акции</h6>
		<div class="actions-slider clearfix">
			<h5><?php the_field( "main_title" ); ?></h5>
			<p><?php the_field( "subtitle" ); ?></p>
			<a href="" class="order button-orange">ЗАКАЗАТЬ</a> <a href="" class="detailed button-transparent">ПОДРОБНЕЕ</a>
			<div class="battles"></div><!-- battles -->
		</div><!-- actions-slider -->
		<?php if( have_rows('action_list') ): ?>
		<ul class="clearfix">
			<?php while( have_rows('action_list') ): the_row(); 
    			$action_img = get_sub_field('action_img');
    			$action_title = get_sub_field('action_title');
    			$action_descr = get_sub_field('action_descr');
    		?>
			<li>
				<img src="<?php echo $action_img; ?>" alt="">
				<h5><?php echo $action_title; ?></h5>
				<?php echo $action_descr; ?>
			</li>
    		<?php endwhile; ?>
    	</ul>
    	<?php endif; ?>
	</div><!-- inner -->
</article><!-- actions -->

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>