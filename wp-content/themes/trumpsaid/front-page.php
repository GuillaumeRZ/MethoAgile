<?php get_header(); ?>

<div id="wordpress">
	<h1>Trump said ...</h1>
	<section class="container">
	<?php query_posts('post_type=quote&showposts=1'); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="quote">
			<?php echo do_shortcode("[quotes cate='Trump']") ?>
			<ul id="vote">
				<li>&#8593;</li>
				<li>&#8595;</li>
				<li>0</li>
			</ul>
			<ul id="share">
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