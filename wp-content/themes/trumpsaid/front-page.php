<?php get_header(); ?>

<div class="wordpress">
	<h1>Random Thing <?php bloginfo( 'name' ); ?> ...</h1>
	<section class="container">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="quote">
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif;?>
	</section>
	<section class="container" id="randomize">
		<a href="/"><button>Randomize</button></a>
	</section>
</div>

<?php get_footer(); ?>