<?php get_header(); ?>

<main class="margin-wrapper">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <header class="page-header">
        <h2 class="project-title"><?php the_title(); ?></h2>
      </header>

            <?php the_content(); ?>
            <div class="entry-links"><?//php wp_link_pages(); ?></div>

            <div class="edit-post-container">
                <?php edit_post_link(); ?>
            </div>


        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

        <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
        <?php endwhile; endif; ?>

    </article>



</main>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
