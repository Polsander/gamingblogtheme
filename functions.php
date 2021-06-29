<?php function brothersingaming_theme_support() {
//Adds dynamic title support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'brothersingaming_theme_support');


//function below render styles
function brothersingaming_register_styles() {
    $version = wp_get_theme() -> get('Version');
    wp_enqueue_style('brothersingaming-personalcss', get_template_directory_uri() . "/style.css", array('brothersingaming-bootstrap'), $version, 'all');
    wp_enqueue_style('brothersingaming-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css", array(), '5.01', 'all');
    wp_enqueue_style('merriweather-sans-fonts', "https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap", array());
}

add_action('wp_enqueue_scripts', 'brothersingaming_register_styles' );
update_option('medium_size_h', 200);



//Functions below render scripts

function brothersingaming_register_scripts() {
    
    wp_enqueue_script('brothersingaming-bootstrap_script',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js", array(), '5.01', true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/navbar.js', array (), 1.1, true);
}

add_action('wp_enqueue_scripts', 'brothersingaming_register_scripts' );


//Function fixes tag post limit that is displayed :)

function wpa69774_limit_tags( $query ) {
    if ( $query->is_tag() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 10 );
    }
}
add_action( 'pre_get_posts', 'wpa69774_limit_tags' );

//Function fixes category post limit that is displayed
function cat_limit_tags ($query) {
    if ($query->is_category() && $query->is_main_query()) {
        $query->set('posts_per_page', 10);
    }
}
add_action ('pre_get_posts', 'cat_limit_tags');?>