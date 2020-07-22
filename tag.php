<?php get_header(); ?>

<section class="margin-wrapper">

  <header class="header">
      <h2 class="entry-title" alt="<?php single_term_title(); ?>" title="<?php single_term_title(); ?>"><?php single_term_title(); ?></h2>
  </header>

  <main class="content-grid">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry-grid' ); ?>
    <?php endwhile; endif; ?>

  </main>

</section>

<section class="margin-wrapper">
  <div class="archives-nav-container">
  <?php get_template_part( 'nav', 'below' ); ?>
  </div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
