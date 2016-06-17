<?php
/*
Template Name: Contact
*/
get_header(); ?>

<?php include('header-all.php') ?>


<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content c">
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
                          <input class="input-group-field" placeholder="votre e-mail">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="small-12 columns">
                      <div class="input-group">
                          <span class="input-group-label"><i class="fa fa-pencil"></i></span>
                          <input class="input-group-field" placeholder="sujet du message">
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
      <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
