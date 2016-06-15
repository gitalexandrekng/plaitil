<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php include('header-all.php'); ?>

<div id="inpage" role="main">
	<div class="z">
        <article class="main-content">
    	<?php if ( have_posts() ) : ?>

    		<?php /* Start the Loop */ ?>
            <div class="lastcrea">
                <div class="banner">
                    <div class="flex">
                        <div class="in">
                            <h2>Projets</h2>
                        </div>
                    </div>
                </div>
                <div class="intitle">
                    <h3>Quelques une de nos dernières créations</h3>
                    <div>Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.</div>
                </div>
                <div class="contenu">
                    <div class="row">
                        <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 ); ?>
                        <?php $loop = new WP_Query( $args ); ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="large-3 medium-6 columns vignette end">
                                <a class="linkin" href="<?php the_permalink() ?>">
                                    <div class="thumbn" style="background-image:url(<?php the_field('miniature'); ?>)"></div>
                                    <div class="hovered">
                                        <div class="tit"><?php the_title() ?></div>
                                        <div class="more">Voir plus</div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

    		<?php else : ?>
    			<?php get_template_part( 'template-parts/content', 'none' ); ?>

    		<?php endif; // End have_posts() check. ?>

    		<?php /* Display navigation to next/previous pages when applicable */ ?>
    		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
    			<nav id="post-nav">
    				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
    				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
    			</nav>
    		<?php } ?>

    	</article>
	</div>
</div>

<?php get_footer();
