<?php query_posts("p=32"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="response">
	<div class="inner">
		<h6><?php the_title(); ?></h6>
		<a href="#" class="leave-response button-transwhite">НАПИСАТЬ ОТЗЫВ</a>
		<ul class="clearfix">
			<li>
				<?php the_content(); ?>
				<p class="price-quantity">1 баллон <span>24 грн.</span></p>
				<p class="price-quantity">2 и более <span>22 грн.</span></p>
			</li>
			<li>
				<h3><?php the_field( "bottom_right_title" ); ?></h3>
				<div class="phone-foot clearfix">
					<div>
						<?php the_field( "dnipro_work_time" ); ?>
					</div>
					<div>
						<a href="tel:<?php the_field( "dnepr_phone_1_clear" ); ?>"><?php the_field( "dnepr_phone_1_beaty" ); ?></a>
						<br>
						<a href="tel:<?php the_field( "dnepr_phone_2_clear" ); ?>"><?php the_field( "dnepr_phone_2_beaty" ); ?></a>
						<br>
						<a href="tel:<?php the_field( "dnepr_phone_3_clear" ); ?>"><?php the_field( "dnepr_phone_3_beaty" ); ?></a>
						<br>
					</div>
				</div><!-- phone-foot -->
			</li>
		</ul>
	</div><!-- inner -->
</article><!-- response -->

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>