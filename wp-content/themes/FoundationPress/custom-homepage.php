<div class="incontent">
    <div class="agence">
        <div class="inza row">
            <div class="small-12 columns">
                <h1>Notre agence</h1>
                <hr>
                <h2>Exploratrice en web depuis 2005</h2>
            </div>
        </div>
    </div>
    <div class="row txt small-collapse" style="margin-top:-50px">
        <div class="medium-12 columns">
            <img class="image" src="<?php echo get_stylesheet_directory_uri() ?>/images/fond1.jpg" alt="">
            <div class="row small-collapse" data-equalizer>
                <div class="medium-6 columns" data-equalizer-watch>
                    <div class="txtone">
                        <h2>Notre expertise</h2>
                        <hr>
                        Faites confiance à une agence expérimentée, pour qui le web n’a plus de secret. Grâce à notre équipe de professionnels, nous pouvons prendre en charge l’intégralité de votre projet.

                        <a href="<?php bloginfo('home') ?>/portfolio" class="hvr-bounce-to-top custom-button">Projets</a>
                    </div>
                </div>
                <div class="medium-6 columns" data-equalizer-watch>
                    <div class="txttwo">
                        <h2>Qui sommes nous?</h2>
                        <hr>
                        L’agence “plait-il?” réunit un collectif de professionnels et vous accompagne sur toute la chaîne de communication, de votre identité visuelle à votre stratégie digitale. Chaque projet, chaque client est unique. Pour chacun, nous mettons en œuvre une méthodologie

                        <a href="<?php bloginfo('home') ?>/portfolio" class="hvr-bounce-to-top custom-button">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
</div>
