<?php get_header(); ?>

<section class="css-grid">

  <main id="contentHomepage" class="content-grid">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry-grid' ); ?>
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>

  </main>

  </div><!-- Close CSS Grid -->
  <!-- Bottom Navigation -->

  <section class="margin-wrapper">

    <nav class="archives-nav-item">
      <?php get_template_part( 'nav', 'below' ); ?>
    </nav>

  </section>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
