<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php include('header-all.php'); ?>

<div id="inpage" role="main">
    <div class="z">
        <?php do_action( 'foundationpress_before_content' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
        	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
                <div class="wrappered" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
                    <div class="val"><h1><?php the_title(); ?></h1></div>
                    <div class="an"><span style="color:white">Scroll</span><br><i class="fa fa-angle-double-down fa-2x"></i></div>
                </div>
        		<div class="headtitle">
                    <div class="slogan">
                        <h2><?php the_field('slogan'); ?></h2>
                    </div>
                    <div class="bb"></div>
                    <div class="la">
                        <a href="<?php the_field('url'); ?>"><i class="fa fa-link"></i><?php the_field('url'); ?></a>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tup">
                        <?php
                        $values = get_field('type');
                        if($values)
                        {
                        	echo '<ul>';

                        	foreach($values as $value)
                        	{
                        		echo '<li>' . $value . '</li>';
                        	}

                        	echo '</ul>';
                        }
                        ?>
                    </div>
                    <div class="angle">
                        <i class="fa fa-angle-down fa-3x"></i>
                    </div>
        		</div>
                <div class="datz">
                    Création le : <?php the_field('date'); ?>
                </div>
                <div class="contz">
                    <?php the_content() ?>
                </div>
                <div class="galz">
                    <?php

                    $images = get_field('galerie');

                    if( $images ): ?>
                        <div class="row fullwidth small-collapse">
                            <?php foreach( $images as $image ): ?>
                                <div class="large-3 medium-6 columns thu" style="overflow:hidden;">
                                    <a href="<?php echo $image['url']; ?>">
                                        <div class="zo" style="background-image:url(<?php echo $image['sizes']['large']; ?>)"></div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </row>
                    <?php endif; ?>
                </div>
        		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
        	</article>
        <?php endwhile;?>

        <?php do_action( 'foundationpress_after_content' ); ?>
    </div>
</div>
<?php get_footer();
