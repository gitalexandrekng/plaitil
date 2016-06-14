<div class="incontent">
    <div class="agence">
        <div class="inza row">
            <div class="small-12 columns">
                <h1>Notre agence</h1>
                <hr>
            </div>
        </div>
    </div>
    <div class="row txt small-collapse" style="margin-top:-50px">
        <div class="medium-12 columns">
            <img class="image" src="<?php echo get_stylesheet_directory_uri() ?>/images/fond1.jpg" alt="">
            <div class="row small-collapse" data-equalizer>
                <div class="small-6 columns" data-equalizer-watch>
                    <div class="txtone">
                        <h2>Notre expertise</h2>
                        <hr>
                        Faites confiance à une agence expérimentée, pour qui le web n’a plus de secret. Grâce à notre équipe de professionnels, nous pouvons prendre en charge l’intégralité de votre projet.
                    </div>
                </div>
                <div class="small-6 columns" data-equalizer-watch>
                    <div class="txttwo">
                        <h2>Qui sommes nous?</h2>
                        <hr>
                        L’agence “plait-il?” réunit un collectif de professionnels et vous accompagne sur toute la chaîne de communication, de votre identité visuelle à votre stratégie digitale. Chaque projet, chaque client est unique. Pour chacun, nous mettons en œuvre une méthodologie
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lastcrea">
        <div class="banner">
            <div class="flex">
                <div class="in">
                    <h2>Nos dernières créations</h2>
                </div>
            </div>
        </div>
        <div class="contenu">
            <div class="row">
                <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 ); ?>
                <?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="small-3 columns end">
                        <div class="thumbn" style="background-image:url(<?php the_post_thumbnail_url() ?>)"></div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
