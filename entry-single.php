
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="post-header">
      <?php if ( is_singular() ) {
      echo '<h2 class="entry-title">';
      } else {
      echo '<h2 class="entry-title">';
      } ?>
      <?php the_title(); ?>
      <?php if ( is_singular() ) {
      echo '</h2>';
      } else {
      echo '</h2>';
      } ?>
    </header>

    <?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
    <?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>

  </article>
