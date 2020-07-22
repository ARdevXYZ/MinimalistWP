
<footer class="entry-footer">
<span class="author-span">Author: <?php echo get_the_author(); ?></span>
<span class="cat-links"><?php esc_html_e( 'Categories: ', 'minimalistWP' ); ?><?php the_category( ', ' ); ?></span>
<span class="tag-links"><?php the_tags(); ?></span>
<?php if ( comments_open() ) { echo '<span class="meta-sep"> </span> <span class="comments-link"><a href="' . esc_url( get_comments_link() ) . '">' . sprintf( esc_html__( 'Comments', 'minimalistWP' ) ) . '</a></span>'; } ?>
<span class="edit-button-container">
  <span class="edit-post-link"><?php edit_post_link(); ?></span>
</span>

</footer>
