<?php
/**
 *
 */

add_shortcode('share-lite', 'share_lite_add_front');
function share_lite_add_front() {
	wp_enqueue_style( 'share-lite', plugin_dir_url(dirname( __FILE__) ) . 'share-lite/assets/css/share-lite.css' );
	if(!is_admin()):
	?>
	<footer class="article-footer wrapper">
		<div id="button-share">
			<a href="http://www.twitter.com/share?url=<?php the_permalink();?>" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="https://www.linkedin.com/cws/share?url=<?php the_permalink();?>" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a href="mailto:?subject=Article Open Lande : <?php the_title();?>&body=Article de Open Lande concernant : <?php the_title();?>%0D<?php the_permalink();?>"><i class="fa fa-paper-plane"></i></a>
		</div>
		<ul class="soc">
		    <li><a class="soc-twitter" href="http://www.twitter.com/share?url=<?php the_permalink();?>" target="_blank"></a></li>
		    <li><a class="soc-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank"></a></li>
		    <!--<li><a class="soc-googleplus" href="#"></a></li>
		    <li><a class="soc-pinterest" href="#"></a></li>-->
		    <li><a class="soc-linkedin" href="https://www.linkedin.com/cws/share?url=<?php the_permalink();?>" target="_blank"></a></li>
		</ul>
	</footer>
	<?php
	endif;	
}
