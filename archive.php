<?php get_header(); ?>

<section class="margin-wrapper">

  <header class="header">

    <h1 class="entry-title" alt="<?php single_term_title(); ?>" title="<?php single_term_title(); ?>">
        <?php single_term_title(); ?>
        <?php
                $year = get_query_var('year');
                $monthnum = get_query_var('monthnum');
                $day = get_query_var('day');
                $dateDivide = "/";
                echo $monthnum . $dateDivide . $year;
        ?>
    </h1>
    <div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>

  </header>

  <main class="content-grid">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'entry-grid' ); ?>
  <?php endwhile; endif; ?>

    <!-- Bottom Navigation -->
    <div class="archives-nav-container">
    <?php get_template_part( 'nav', 'below' ); ?>
    </div>

  </main>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
