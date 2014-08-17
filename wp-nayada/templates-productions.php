<?php query_posts("p=28"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="productions" class="productions">
	<div class="inner">
		<h5><?php the_title(); ?></h5>
		<p class="descr"><?php the_field( "descript" ); ?></p>
		<?php if( have_rows('etaps_product') ): ?>
		<ul class="clearfix">
			<?php while( have_rows('etaps_product') ): the_row(); 
    			$etaps_name = get_sub_field('etaps_name');
    			$etaps_descript = get_sub_field('etaps_descript');
	        ?>
			<li>
				<h4><?php echo $etaps_name; ?></h4>
				<p><?php echo $etaps_descript; ?></p>
			</li>
    		<?php endwhile; ?>
    	</ul>
    	<?php endif; ?>
		<div class="bottom-two clearfix">
			<div>
				<h5><?php the_field( "bottom_left_name" ); ?></h5>
				<p><?php the_field( "bottom_left_content" ); ?></p>
			</div>
			<div>
				<h5><?php the_field( "bottom_right_name" ); ?></h5>
				<p><?php the_field( "bottom_right_content" ); ?></p>
			</div>
		</div><!-- bottom-two -->
	</div><!-- inner -->
</article><!-- productions -->

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>