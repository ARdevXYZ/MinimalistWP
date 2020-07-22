<?php get_header(); ?>

<main class="single-container">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'entry-single' ); ?>
  <?php endwhile; endif; ?>
  <footer class="footer">
    <?php get_template_part( 'nav', 'below-single' ); ?>
  </footer>
  <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
