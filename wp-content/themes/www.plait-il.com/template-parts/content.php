<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<article class="large-6 columns projets-thumbnails">
			<div class="hover-thumbnails">
				<h3><?php the_title(); ?></h3>
				<a href="<?php the_permalink();?>" class="voir-plus">VOIR LE PROJET</a>
			</div>
			<?php the_post_thumbnail(); ?>
	</article>
</div>
