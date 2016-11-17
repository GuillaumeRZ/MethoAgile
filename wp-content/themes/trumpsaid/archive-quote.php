<?php get_header(); ?>

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

<?php get_footer(); ?>