<div class="marginheader">
    <div class="fade"></div>
</div>
<div class="fadezer"></div>
<div class="customheader">

    <?php include('header-all.php') ?>

    <!-- DEBUT DU SLIDE
    ====================== -->

    <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 ); ?>
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <?php endwhile; ?>

    <!-- CLASS MEDIUM
    ===================== -->

    <div class="wrapper-medium">
        <div class="inwrap">
            <div class="slid owl-carousel" id="responsiveslider">
                <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 ); ?>
                <?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="item">
                        <div class="inslidez" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
                            <div class="car">
                                <div class="slog"><?php the_field('slogan'); ?></div>
                                <div class="int" style="margin-top:30px;"><?php the_title() ?></div>
                                <div class="text-center" style="margin-top:30px;"><a href="<?php the_permalink() ?>" class="but hvr-grow-shadow">Découvrir</a></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <div class="contacthigh">
        <a href="#" class="close"><i class="fa fa-times"></i></a>
        <div class="customform">
            <h2>Contactez-nous</h2>
            <h3>Ne soyez pas timide !</h3>
            <div class="des">Nous pouvons vous aider à concrétiser votre projet. Nous vous accompagnerons et développerons votre projet de façon à le rendre unique !</div>
            <div class="row">
                <div class="small-6 columns" style="padding-right:4px;">
                    <div class="input-group">
                        <span class="input-group-label"><i class="fa fa-user"></i></span>
                        <input class="input-group-field" placeholder="votre nom">
                    </div>
                </div>
                <div class="small-6 columns">
                    <div class="input-group">
                        <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                        <input class="input-group-field">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <div class="input-group">
                        <span class="input-group-label"><i class="fa fa-pencil"></i></span>
                        <input class="input-group-field">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                    <textarea name="" id="" cols="30" rows="5"></textarea>
                    <button type="submit" class="custombutton its">Envoyer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="row small-collapse fullwidth">
            <div class="large-3 medium-4 columns testleft" style="height:100%;">
                <div class="left">
                    <div class="inleft"></div>
                </div>
            </div>
            <div class="large-9 medium-8 columns testright" style="height:100%">
                <div class="right">

                    <!-- Section 1 -->

                    <div id="owlslide" class="owl-carousel">
                        <?php $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 2 ); ?>
                        <?php $loop = new WP_Query( $args ); ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="item" data-hash="<?php the_ID() ?>">
                                <div class="sliderz" style="background-image:url(<?php the_post_thumbnail_url() ?>)"></div>
                                <div class="caracteristiques">
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
                                    <div class="texte"><?php the_field('slogan'); ?></div>
                                </div>
                                <div class="intitlez"><?php echo the_title() ?></div>
                                <a href="<?php the_permalink() ?>" class="buttonport hvr-grow-shadow discover">Voir le projet</a>
                                <div class="caracteristiques"></div>
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
                        <a class="contactcube hvr-bounce-to-top">
                            <div class="incontact">
                                <span style="font-size:14px;">Vous avez un projet en tête ?</span><br>
                                Contactez-nous
                            </div>
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
                            <div class="texte">Portfolio complet</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-6 columns" style="height:100%;"></div>
        </div>
    </div>

</div>
