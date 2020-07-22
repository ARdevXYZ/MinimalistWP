<!-- Bottom Navigation -->
<div class="archives-nav-container">
  <?php $args = array(
  'prev_text' => sprintf( esc_html__( '%s older', 'minimalistWP' ), '<span class="meta-nav">&larr;</span>' ),
  'next_text' => sprintf( esc_html__( 'newer %s', 'minimalistWP' ), '<span class="meta-nav">&rarr;</span>' )
  );
  the_posts_navigation( $args ); ?>
</div>
