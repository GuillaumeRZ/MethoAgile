<?php get_header(); ?>

<div class="wordpress">
	<h1 id="listTitle"><?php bloginfo( 'name' ); ?> all of this ...</h1>
	<section class="container">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="quote quoteList">
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif;?>
	</section>
</div>

<?php get_footer(); ?>