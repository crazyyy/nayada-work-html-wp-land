<?php query_posts("p=20"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="about-water">
	<h2 id="about-water"><?php the_title(); ?></h2>
	<div  id="tabs">
		<ul class="tab-header">
	        <li><a href="#tabs-1" title=""><?php the_field( "tab_name_1" ); ?></a></li>
	        <li><a href="#tabs-2" title=""><?php the_field( "tab_name_2" ); ?></a></li>
	    </ul>
	    <div id="tabs_container">
	        <div id="tabs-1">
	        	<?php the_field( "tab_content_1" );  ?>
	        	<?php if( have_rows('list_pluses') ): ?>
	        	<ul class="pluses">
	        		<?php while( have_rows('list_pluses') ): the_row(); 
	        			$list_pluses_inner = get_sub_field('list_pluses_inner');
	        		?>
	        		<li><?php echo $list_pluses_inner; ?></li>
	        		<?php endwhile; ?>
	        	</ul>
	        	<?php endif; ?>
	        </div><!-- tabs-1 -->
	        <div id="tabs-2">
	        	<?php the_field( "tab_content_2" );  ?>
	        </div><!-- tabs-2 -->
	    </div><!--End tabs container--> 
	</div><!--End tabs-->
</article><!-- about-water -->
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>