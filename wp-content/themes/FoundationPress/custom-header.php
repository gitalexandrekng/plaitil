<div class="customheader">

    <!-- navbarre
    =========================== -->
    <div class="navbarre">
        <div class="bordure"></div>
        <div class="logozer">
            <div class="left">
                <div class="in">Agence</div>
            </div>
            <div class="logo"></div>
            <div class="right">
                <div class="in">Web</div>
            </div>
        </div>
        <div class="in-menu"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
        <div class="hamburger"><i class="fa fa-bars"></i></div>
    </div>

    <!-- DEBUT DU SLIDE
    ====================== -->

    <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 ); ?>
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <?php endwhile; ?>

    <div class="wrapper">
        <div class="row small-collapse fullwidth">
            <div class="small-3 columns" style="height:100%;">
                <div class="left">
                    <div class="inleft"></div>
                </div>
            </div>
            <div class="small-9 columns" style="height:100%">
                <div class="right">

                    <!-- Section 1 -->

                    <div id="owlslide" class="owl-carousel">
                        <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 2 ); ?>
                        <?php $loop = new WP_Query( $args ); ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="item" data-hash="<?php the_ID() ?>">
                                <div class="sliderz" style="background-image:url(<?php the_post_thumbnail_url() ?>)"></div>
                                <div class="fade"></div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <!-- Section 2 -->
                    <div id="owltitle" class="owl-carousel">
                        <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 2 ); ?>
                        <?php $loop = new WP_Query( $args ); ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="item titlez" data-hash="<?php the_ID() ?>">
                                <div class="describe">
                                    <div class="barre"></div>
                                    <div class="texte">Super portfolio de swag website</div>
                                </div>
                                <div class="intitlez"><?php echo the_title() ?></div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <!-- Section 3 -->
                    <div class="type">
                        <div class="intype">Art direction / UI / UX DEISGN</div>
                    </div>

                    <!-- section 4 -->
                    <div class="carrerouge"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapperred">
        <div class="row small-collapse fullwidth">
            <div class="small-6 columns" style="height:100%;">
                <div class="left">

                    <!-- La navigation en cube -->
                    <div class="navigationcube">
                        <a class="contactcube">
                            <div class="incontact">Contact</div>
                        </a>
                        <div class="row small-collapse fullwidth" style="height:50%;position:relative;z-index:5;">
                            <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 2 ); ?>
                            <?php $loop = new WP_Query( $args ); ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <a class="small-6 columns inz" href="#<?php the_ID() ?>">
                                    <div class="fond" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                        <div class="carre"></div>
                    </div>

                    <!-- red cube -->
                    <div class="inleft"></div>

                    <!-- more -->
                    <div class="more">
                        <div class="in">
                            <div class="texte">Voir plus</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-6 columns" style="height:100%;"></div>
        </div>
    </div>

</div>
