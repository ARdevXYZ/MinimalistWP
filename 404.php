<?php get_header(); ?>

<section class="margin-wrapper">
  <main id="content">
  <article id="post-0" class="post not-found">
  <header class="header-archives-class">
  <h1 class="entry-title" alt="<?php esc_html_e( 'Not Found', 'minimalistWP' ); ?>" title="<?php esc_html_e( 'Not Found', 'minimalistWP' ); ?>"><?php esc_html_e( 'Not Found', 'minimalistWP' ); ?></h1>
  </header>
  <div class="entry-content">
    <p>404 not found!</p>
    <p>Back to <a href="<?php echo get_home_url(); ?>" alt="Visit homepage" title="Visit homepage" rel="noopener">homepage</a></p>
  </div>
  </article>
  </main>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
