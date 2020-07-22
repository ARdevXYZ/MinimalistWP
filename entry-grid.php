<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>" class="grid-child">

  <?php
  if ( has_post_thumbnail( $post->ID ) ) :
      $imageInfo = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'wp-post-image' );
      $imageUrl = $imageInfo[0];
  else:
      $imageUrl = get_template_directory_uri() . '/lib/images/wp-placeholder-image.png';
  endif;
?>
    <div class="featured-image"  style="background: url(<?php echo $imageUrl; ?>) no-repeat">

    </div>

  <header class="header-grid">
    <h2 title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></h2>

   <!-- Item Meta -->
   <span class="meta-info">
     <span class="category-meta">
       <?php
       $category = get_the_category();
       echo $category[0]->cat_name;
       ?>
     </span> <span class="meta-divider"> / </span>
     <span class="data-meta">
       <?php the_time( get_option( 'date_format' ) ); ?>
     </span>

   </span>

  </header>

</a>
<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
</article>
