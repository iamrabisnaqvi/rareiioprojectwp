<?php
/*
Template Name: Login Page

*/
get_header(); ?>
<div class="container">
	<?php
	while ( have_posts() ) :
		the_post();
		if(!is_user_logged_in()):
		the_content();
		else:
		    $currentuser = wp_get_current_user();
		    echo '<div class="row"><div class="col-sm-12 col-md-1"></div><div class="col-sm-12 col-md-10 wrapper"><h4 class="title">Hello '.$currentuser->display_name.'</h4><p class="subtitle">You are already Logged In</p>	</div></div>';
		endif;
		endwhile; ?>
</div>
<?php get_footer(); ?>