<?php get_header(); ?>
        
<div class="wordpress">
	<h1><?php bloginfo( 'name' ); ?> ...</h1>
	<section class="container">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="quoteSingle">
		<?php the_content(); $author = get_post_meta( $post->ID, 'quote_author', true ); echo '<span class="qm_quote_author">~'.$author.'</span>' ?>
			<ul class="vote">
				<li>&#8593;</li>
				<li>&#8595;</li>
				<li>0</li>
			</ul>
			<ul class="share">
				<li>to <?php echo $author ?></li>
				<li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
				<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
			</ul>
		</div>
	<?php endwhile; endif;?>
	<button class="changeQuote changeQuote--prev"><a href="">Previous quote</a></button>
	<button class="changeQuote changeQuote--next"><a href="">Next quote</a></button>
	</section>
</div>

<?php get_footer(); ?>