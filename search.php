<?php get_header(); ?>

<div class="margin-wrapper">

  <header class="header">
    <h1 class="entry-title" alt="<?php single_term_title(); ?>" title="<?php single_term_title(); ?>"><?php printf( esc_html__( 'Search Results for: %s', 'minimalistWP' ), get_search_query() ); ?></h1>
  </header>

  <main class="content-grid">

    <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry-grid' ); ?>
    <?php endwhile; ?>

    <?php else : ?>

    <article id="post-0" class="post no-results not-found">
    <header class="header">
    <h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'minimalistWP' ); ?></h1>
    </header>
    <div class="entry-content">
    <p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'minimalistWP' ); ?></p>
    <?php get_search_form(); ?>
    </div>
    </article>

    <?php endif; ?>

  </main>

    <?php get_template_part( 'nav', 'below' ); ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
