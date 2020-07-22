<!-- Bottom Navigation -->
<div class="archives-nav-container">
  <?php $args = array(
  'prev_text' => '<div><span class="meta-nav">&larr;</span> %title</div>',
  'next_text' => '<div>%title <span class="meta-nav">&rarr;</span></div>'
  );
  the_post_navigation( $args ); ?>
</div>
