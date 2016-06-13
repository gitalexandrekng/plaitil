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

    <div class="wrapper">
        <div class="row small-collapse fullwidth">
            <div class="small-3 columns" style="height:100%;">
                <div class="left">
                    <div class="inleft"></div>
                </div>
            </div>
            <div class="small-9 columns" style="height:100%">
                <div class="right">
                    <div class="sliderz"></div>
                    <div class="titlez">
                        <div class="describe">
                            <div class="barre"></div>
                            <div class="texte">Super portfolio de swag website</div>
                        </div>
                        <div class="intitlez">
                            SWAG<br>website
                        </div>
                    </div>
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
                            <a class="small-6 columns inz" href="#">
                                <div class="fond" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/src/swag-3.png)">
                                </div>
                            </a>
                            <a class="small-6 columns inz" href="#">
                                <div class="fond" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/src/swag-2.png)">
                                </div>
                            </a>
                        </div>
                        <div class="carre"></div>
                    </div>

                    <!-- red cube -->
                    <div class="inleft"></div>
                </div>
            </div>
            <div class="small-6 columns" style="height:100%;"></div>
        </div>
    </div>

</div>
