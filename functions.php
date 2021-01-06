<?php

require_once get_template_directory() . '/redux.php';
require_once get_template_directory() . '/navWalker.php';
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_style( 'poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap' );

  wp_enqueue_style( 'iconic-font', 'https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css' );

  wp_enqueue_style( 'boostrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' );
 
  wp_enqueue_style( 'main-theme', get_template_directory_uri() . '/assets/css/main.css');
 
 wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_theme_support( 'title-tag' );

register_nav_menus(
			array(
				'navbar' => 'Primary',
				'footer' => 'Footer Menu'
			)
		);


$args = array(
	'name'          => __('Footer 1'),
    'id'            => 'footer-1',          
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebars( 1, $args );

$args = array(
	'name'          => __('Footer 2'),
    'id'            => 'footer-2',          
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebars( 1, $args );
$args = array(
	'name'          => __('Footer 3'),
    'id'            => 'footer-4',          
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebars( 1, $args );
$args = array(
	'name'          => __('Footer 4'),
    'id'            => 'footer-4',          
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebars( 1, $args );
$args = array(
	'name'          => __('Footer 5'),
    'id'            => 'footer-5',          
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebars( 1, $args );


function login_func( $atts ) {
	$a = shortcode_atts( array(
// 		'id' => 'something',
// 		'bar' => 'something else',
	), $atts );
    
    $html = '';
    
    if ( is_user_logged_in() ) :
        
        $html .= '<div class="logout">';
        $html .= 'Hello '; 
        $currentuser = wp_get_current_user();
        $html .= $currentuser->display_name;
        $html .= '</br>';
        $html .= 'You are already logged in.';
        $html .= '</div>';
        $html .= '<a id="wp-submit" href="'.wp_logout_url().'" title="Logout">';
        $html .= 'Logout';
        $html .= '</a>';

    else: 
        
        $args = array(
            'echo'           => false,
            'redirect'       => home_url( '/wp-admin/' ), 
            'form_id'        => 'loginform',
            'label_username' => __( 'Your Email Address' ),
            'label_password' => __( 'Your Password' ),
            'label_log_in'   => __( 'Log In' ),
            'id_username'    => 'email',
            'id_password'    => 'password',
            'id_submit'      => 'wp-submit',
            'remember'       => false
        ); 
        
        $html .= wp_login_form( $args );
        $html .= '<input type="hidden" name="forgotPasswordUrl" id="forgotPasswordUrl" value="'.wp_lostpassword_url( get_permalink() ).'"/>';
        $html .= '<span class="or">OR</span><a href="#" class="btn btn-block btn-outline-secondary btn-circle"><img src="'.get_template_directory_uri().'/assets/images/google.png'.'" alt="" width="15px" style="margin-right: 20px;">Log In with Google <i class="zmdi zmdi-caret-right"></i></a>';
        $html .= '<div class="preloader"></div>';
    endif;
    
    return $html;
    
// 	return "foo = {$a['foo']}";
}
add_shortcode( 'loginform', 'login_func' );

