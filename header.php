<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <?php wp_head(); ?>
        <style>
            body.page-template-template-login {
                background-image: url('<?php echo get_template_directory_uri().'/assets/images/bg.png'; ?>');
            }
            footer {
                background-image:  url('<?php echo get_template_directory_uri().'/assets/images/footer-bg.png'; ?>');
            }
        </style>
    </head>
    <body <?php body_class(); ?>>
    	<?php get_template_part( 'partials/navbar'); ?>
