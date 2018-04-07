<?php

//thumbnails
add_theme_support('post-thumbnails');

//add menus
add_theme_support('menus');

function acmelearning_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri(), 'style.css');

}
add_action('wp_enqueue_scripts', 'acmelearning_styles');

add_theme_support( 'post-thumbnails' );

add_image_size( 'acmelearning-featured-image', 2000, 1200, true );

add_image_size( 'acmelearning-thumbnail-avatar', 100, 100, true );

function add_id_and_classes_to_page_menu( $ulclass ) {
  return preg_replace( '/<ul>/', '<ul id="main-menu" class="nav navbar-nav collapse navbar-collapse">', $ulclass, 1 );
}
add_filter( 'wp_page_menu', 'add_id_and_classes_to_page_menu' );

// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'acmelearning' ),
		'social' => __( 'Social Links Menu', 'acmelearning' ),
	) );
	
/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
		'name' => 'Footer Widgets',
		'id'   => 'footer-widgets',
		'description'   => 'Widget Area',
		'before_widget' => '<div id="one" class="two">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title'   => '</h2>'
		));
		
		register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'acmelearning' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'acmelearning' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer 1', 'acmelearning' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'acmelearning' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer 2', 'acmelearning' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'acmelearning' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	
	function breadcrumbs($id = null){
	?>
	<div id="breadcrumbs">
		<a href="<?php bloginfo('url'); ?>">Home</a></span> >
		<?php if(!empty($id)): ?>
		<a href="<?php echo get_permalink( $id ); ?>" ><?php echo get_the_title( $id ); ?></a> >
		<?php endif; ?>
		<span class="breadcrumb_last"><?php the_title(); ?></span>
	</div>
	<?php }

	

?>