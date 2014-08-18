<?php query_posts("p=30"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="aboutus" class="aboutus">
	<div class="inner">
		<h6><?php the_title(); ?></h6>
			<h5><?php the_field( "subtitle" ); ?></h5>
			<a href="<?php the_field( "sertificate_big" ); ?>" rel="lightbox" class="sertificate"><img src="<?php the_field( "sertificate_small" ); ?>" alt=""><span></span></a>
			<h4 class="avards"><?php the_field( "awards_text" ); ?></h4>
			<?php if( have_rows('awards') ): ?>
			<ul class="avards clearfix">
				<?php while( have_rows('awards') ): the_row(); 
	    			$awards_img_small = get_sub_field('awards_img_small');
	    			$awards_img_big = get_sub_field('awards_img_big');
		        ?>
				<li><a rel="lightbox" href="<?php echo $awards_img_big; ?>"><img src="<?php echo $awards_img_small; ?>" alt=""></a></li>
	    		<?php endwhile; ?>
	    	</ul><!-- avards -->
	    	<?php endif; ?>
		<h4 class="comments"><?php the_field( "clients_title" ); ?></h4>
		<?php if( have_rows('clients_response') ): ?>
	</div><!-- inner -->
	<div class="white-response">
		<ul class="clearfix client-response">
			<?php while( have_rows('clients_response') ): the_row(); 
    			$responde_content = get_sub_field('responde_content');
    			$client_name = get_sub_field('client_name');
	        ?>
			<li>
				<p><?php echo $responde_content; ?></p>
				<span class="name"><?php echo $client_name; ?></span>
			</li>
			<?php endwhile; ?>
		</ul><!-- client-response -->
		<?php endif; ?>
	</div><!-- white-response -->
</article>  <!-- aboutus -->  


<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>