<?php query_posts("p=24"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="equipment">
	<div class="inner clearfix">
		<h6><?php the_title(); ?></h6>
		<h3><?php the_field( "subtitle" ); ?></h3>
		<?php if( have_rows('4_products') ): ?>
		<ul class="clearfix">
			<?php while( have_rows('4_products') ): the_row(); 
    			$products_img = get_sub_field('4_products_img');
    			$products_title = get_sub_field('4_products_title');
    			$products_price = get_sub_field('4_products_price');
    			$products_descr = get_sub_field('4_products_descr');
    		?>
			<li>
				<span><img src="<?php echo $products_img; ?>" alt=""></span>
				<h5><?php echo $products_title; ?></h5>
				<p class="price">22<?php echo $products_price; ?></p>
				<?php echo $products_descr; ?>
			</li>
			<?php endwhile; ?>
        </ul>
        <?php endif; ?>
		<div class="wide-contact">
			<p><?php the_field( "equip_bottom_title" ); ?></p>
			<span><a href="tel:<?php the_field( "equip_bottom_phonenumber_clear" ); ?>"><?php the_field( "equip_bottom_phone_beaty" ); ?></a></span>
			<p class="grey"><?php the_field( "equip_bottom_grey_text" ); ?></p>
		</div><!-- wide-contact -->
	</div><!-- inner -->
</article><!-- equipment -->

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>