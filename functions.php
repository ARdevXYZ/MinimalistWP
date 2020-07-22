<?php
add_action( 'after_setup_theme', 'minimalistWP_setup' );
function minimalistWP_setup() {
load_theme_textdomain( 'minimalistWP', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );
// Custom background color.
add_theme_support(
  'custom-background',
  array(
    'default-color' => 'F5F5F5',
  )
);
// Custom logo.
$logo_width  = 120;
$logo_height = 90;

// If the retina setting is active, double the recommended width and height.
if ( get_theme_mod( 'retina_logo', false ) ) {
  $logo_width  = floor( $logo_width * 2 );
  $logo_height = floor( $logo_height * 2 );
}

add_theme_support(
  'custom-logo',
  array(
    'height'      => $logo_height,
    'width'       => $logo_width,
    'flex-height' => true,
    'flex-width'  => true,
  )
);

// require
require get_template_directory() . '/inc/template-tags.php';

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'minimalistWP' ) ) );
}
add_action( 'wp_enqueue_scripts', 'minimalistWP_load_scripts' );
function minimalistWP_load_scripts() {
wp_enqueue_style( 'minimalistWP-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'minimalistWP_footer_scripts' );
function minimalistWP_footer_scripts() {
?>
<?php // special thanks to blankslate dev team :) ?>
<?php
}
add_filter( 'document_title_separator', 'minimalistWP_document_title_separator' );
function minimalistWP_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'minimalistWP_title' );
function minimalistWP_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'minimalistWP_read_more_link' );
function minimalistWP_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'minimalistWP_excerpt_read_more_link' );
function minimalistWP_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'minimalistWP_image_insert_override' );
function minimalistWP_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'minimalistWP_widgets_init' );
function minimalistWP_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'minimalistWP' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'minimalistWP_pingback_header' );
function minimalistWP_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'minimalistWP_enqueue_comment_reply_script' );
function minimalistWP_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function minimalistWP_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'minimalistWP_comment_count', 0 );
function minimalistWP_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
