<?php get_header(); ?>

<div class="wordpress">
	<h1>Random Thing <?php bloginfo( 'name' ); ?> ...</h1>
	<section class="container">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="quote">
			<?php the_content(); ?>
			<ul class="vote">
				<li>&#8593;</li>
				<li>&#8595;</li>
				<li>0</li>
			</ul>
			<ul class="share">
				<li>to Trump</li>
				<li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
				<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
			</ul>
		</div>
	<?php endwhile; endif;?>
	</section>
	<section class="container" id="randomize">
		<button><a href="/">Randomize</a></button>
	</section>
</div>

<?php get_footer(); ?>