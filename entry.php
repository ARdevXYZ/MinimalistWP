<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>" class="flex-item">
    <header>
      <?php if ( is_singular() ) {
      echo '<h2 class="entry-title">';
      } else {
      echo '<h2 class="entry-title">';
      } ?>
      <h2 href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?>
      <?php if ( is_singular() ) {
      echo '</h2>';
      } else {
      echo '</h2>';
      } ?>
      <?php// if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
    </header>

    <!-- Meta Info -->
    <span class="tags-span-class">
      <?php// get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
      <?php// if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
      <span><?php the_time( get_option( 'date_format' ) ); ?></span>
    </span>
  </a>
  <?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
</article>
