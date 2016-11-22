<?php get_header(); ?>
        
<div class="wordpress">
	<h1><?php bloginfo( 'name' ); ?> ...</h1>
	<section class="container">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="quoteSingle">
		<?php the_content();?>
		</div>
	<?php endwhile; endif;?>
	</section>
</div>

<?php get_footer(); ?>