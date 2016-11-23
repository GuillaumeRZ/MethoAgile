<?php get_header(); ?>
        
<div class="wordpress">
	<h1><?php bloginfo( 'name' ); ?> ...</h1>
	<section class="container">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="quoteSingle">
		<?php the_content(); $author = get_post_meta( $post->ID, 'quote_author', true ); echo '<span class="qm_quote_author">~'.$author.'</span>' ?>
			<?php
			$post_slug = get_post_field('post_name', get_post());
			$twitter = get_post_meta(get_the_ID(), 'twitter', true);


			echo $share_buttons = '
          <ul class="share">
            <a data-site="" href="http://twitter.com/share?&text=Hey '.$twitter.', remember when you said that ? &url=http://'.$_SERVER["HTTP_HOST"].'/quote/'.$post_slug.'">
              <li>to Trump</li>
            </a>
            <a data-site="" href="http://www.facebook.com/sharer.php?u=http://'.$_SERVER["HTTP_HOST"].'/quote/'.$post_slug.'" target="_blank">
              <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
            </a>
            <a data-site="" href="http://twitter.com/share?url=http://'.$_SERVER["HTTP_HOST"].'/quote/'.$post_slug.'" target="_blank">
              <li><i class="fa fa-twitter" aria-hidden="true" alt="Tweet about this on Twitter"></i></li>
            </a>
          </ul>
          '; 
          ?>
		</div>
	<?php endwhile; endif;?>
	<?php
		// $post_ID = get_the_id();
		// $good = false;
		// $post_Cat = null;
		// while($good != true){
		// 	$post_ID = $post_ID - 1;
		// 	$post_Cat = get_post_field('post_type', $post_ID);	

		// 	if($post_Cat === 'quote'){
		// 		$good = true;
		// 	}

		// }
  //       $post_slug = get_post_field('post_name', $post_ID);

	?>
	<a href="<?php echo "http://".$_SERVER["HTTP_HOST"]."/quote/".$post_slug." "; ?>"><button class="changeQuote changeQuote--prev">Previous quote</button></a>
	<?php
		// $post_ID = get_the_id();
		// $good = false;
		// $post_Cat = null;
		// while($good != true){
		// 	$post_ID = $post_ID + 1;
		// 	$post_Cat = get_post_field('post_type', $post_ID);	

		// 	if($post_Cat === 'quote'){
		// 		$good = true;
		// 	}

		// }
  //       $post_slug = get_post_field('post_name', $post_ID);


	?>
	<a href="<?php echo "http://".$_SERVER["HTTP_HOST"]."/quote/".$post_slug." "; ?>"><button class="changeQuote changeQuote--next">Next quote</button></a>
	</section>
</div>

<?php get_footer(); ?>