<?php 
// Routes
require get_theme_file_path('/includes/routes.php');

// Files
function portfolio(){
  

if($_SERVER['HTTP_HOST'] === 'myportfolio.local'){
// Files
    wp_enqueue_style('my-style', get_theme_file_uri('/css/style.css'), null, '1.0', 'all');
    wp_enqueue_script('main-scripts', get_theme_file_uri('/bundled-assets/dev.js'), NULL, '1.0', true);
}else{
// Files
    wp_enqueue_style('my-style', get_theme_file_uri('/css/style.css'), null, '1.0', 'all');
    wp_enqueue_script('main-scripts', get_theme_file_uri('/bundled-assets/bundled.1ba95cde6b8a404379a9.js'), NULL, '1.0', true);
}
  
    
  // Nonce
    wp_localize_script('main-scripts', 'portfolioData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));  
}

add_action('wp_enqueue_scripts', 'portfolio');


// Features
function portfolio_features(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('MediumLandscape', 800, 460, true);
  add_image_size('SmallLandscape', 400, 260, true);
  add_image_size('SmallSquare', 220, 220, true);
  add_image_size('HomeBlog', 350, 250, true);
  add_image_size('flexible', 9999, 9999, true);
}

add_action('after_setup_theme', 'portfolio_features');

// Remove Admin Bar for All Other Users
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !current_user_can('danielle') && !is_admin()) {
  show_admin_bar(false);
}
}

// Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );