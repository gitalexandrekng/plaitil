<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="flexslider large-12 columns">
  <ul class="slides">
    <li>
	  <div class="center-vertical">
		  <h1>PROJET<br/>
		  "SWAG"</h1>
		  <a href="#">VOIR LE PROJET</a>
  	  </div>
	  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/plait-il-slide-accueil-swag.jpg"/>
    </li>
    <li>
	  <div class="center-vertical">
		  <h1>PROJET<br/>
	  	  "ANNE FONTAINE"</h1>
		  <a href="#">VOIR LE PROJET</a>
  	  </div>
	  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/plait-il-slide-accueil-anne-fontaine.jpg"/>
    </li>
    <li>
		<div class="center-vertical">
			 <h1>VOUS AVEZ<br/>
		    	  UN PROJET EN TÊTE ?</h1>
			  <a href="#">CONTACTEZ-NOUS</a>
		</div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/plait-il-slide-accueil-anne-fontaine.jpg"/>
    </li>
  </ul>
</div>

<!-- DEBUT CONTENU -->
<!--
<div id="page" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

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
	<?php get_sidebar(); ?>-->

	<div class="section-agence row">
		<div class="large-6 columns content-base">
			<h1 class="titre-section">Agence Plait-il ?</h1>
			<h2 class="sous-titre">Exploratrice en web depuis 2005</h2>
			<p class="texte-courant">
				Faites confiance à une agence expérimentée, pour qui le web n’a plus de secret. Grâce à notre équipe de professionnels, nous pouvons prendre en charge l’intégralité de votre projet.
			</p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/image-agence-2.jpg" />
			<p class="texte-courant">
				Chez “Plait-il?”, nous cultivons les paradoxes : sérieux et bonne humeur, rigueur et créativité, autonomie et esprit d’équipe sont les valeurs que nous partageons, en exerçant tous les jours nos métiers si différents. Vous vous reconnaissez ? Il est une promesse que nous pouvons vous faire : vous n’allez pas vous ennuyer !
			</p>
		</div>
		<div class="large-6 columns content-base">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/image-agence-1.jpg" />
			<p class="texte-courant">
				L’agence “plait-il?” réunit un collectif de professionnels et vous accompagne sur toute la chaîne de communication, de votre identité visuelle à votre stratégie digitale. Chaque projet, chaque client est unique. Pour chacun, nous mettons en œuvre une méthodologie structurée et sur-mesure. Elle garantit un pilotage efficace et le respect de nos engagements.
			</p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/image-agence-3.jpg" />
		</div>
	</div>

	<div class="row">
        <div class="large-12 columns section-projets">
    		<div class="row">
    			<div class="large-6 columns content-base">
    				<?php if ( have_posts() ) : ?>

    					<?php /* Start the Loop */ ?>
    					<?php while ( have_posts() ) : the_post(); ?>
    						<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
    					<?php endwhile; ?>

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
    			</div>
    			<div class="large-6 columns content-base">
    				<h1 class="titre-section">Projets</h1>
    				<h2 class="sous-titre">Quelques unes de nos réalisations</h2>
    				<p class="texte-courant">
    					Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente afin de vous faire profiter des dernières tendances et innovations pour un design unique et impactant.
    				</p>
    			</div>
    		</div>
    	</div>

    	<div class="large-12 columns section-contact">
    		<div class="row">
    			<div class="large-6 columns content-base">
    				<h1 class="titre-section">Nous contacter</h1>
    				<h2 class="sous-titre">Ne soyez pas timide !</h2>
    				<p class="texte-courant">
    					Nous pouvons vous aider à concrétiser votre projet.
    					Nous vous accompagnerons et développerons votre projet de façon à le rendre unique !<br/>
    					(Tous les champs suivant sont requis)
    				</p>
    				<?php echo do_shortcode('[contact-form-7 id="26" title="Contact"]') ?>
    			</div>
    			<div class="large-6 columns content-base">

    			</div>
    		</div>
    	</div>
	</div>

<?php get_footer();
