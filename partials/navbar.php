<?php global $customtheme; ?>
<nav class="navbar navbar-expand-lg navbar-light">
	<a class="navbar-brand" href="<?php echo home_url(); ?>">
	    <?php if($customtheme['logo_normal']['url']){?>
               <img src="<?= $customtheme['logo_normal']['url'] ?>" alt="<?php bloginfo('Name');  ?>" class="logo img-fluid">
               <?php } ?>
	  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  	<form class="form-inline my-2 my-lg-0 d-sm-none d-md-block" action="<?php echo home_url(); ?>" method="get"> 
      <div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
	    <div class="dropdown-menu">
	      <a class="dropdown-item" href="#">Action</a>
	      <a class="dropdown-item" href="#">Another action</a>
	      <a class="dropdown-item" href="#">Something else here</a>
	      <div role="separator" class="dropdown-divider"></div>
	      <a class="dropdown-item" href="#">Separated link</a>
	    </div>
	  </div>
	  <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search by Books" name="s" id="search">
	  <div class="input-group-append">
	    <button class="btn btn-primary" type="submit">
	    	<i class="zmdi zmdi-search"></i>
	    </button>
	  </div>
	</div>
    </form>
    <!--<ul class="navbar-nav ml-auto mt-2 mt-lg-0">-->
    <!--  <li class="nav-item">-->
    <!--    <a class="nav-link" href="#">Pricing</a>-->
    <!--  </li>-->
    <!--  <li class="nav-item">-->
    <!--    <a class="nav-link" href="#">Bookshelf</a>-->
    <!--  </li>-->
    <!--  <li class="nav-item">-->
    <!--    <a class="nav-link" href="#">Blog</a>-->
    <!--  </li>-->
    <!--  <li class="nav-item">-->
    <!--    <a class="nav-link" href="#">Contact Us</a>-->
    <!--  </li>-->
    <!--  <li class="nav-item">-->
    <!--    <a class="nav-link text-primary" href="#">Log In</a>-->
    <!--  </li>-->
    <!--  <li class="nav-item">-->
    <!--    <a class="nav-link btn btn-primary" href="#">Sign Up</a>-->
    <!--  </li>-->
    <!--</ul>-->
    <?php
    wp_nav_menu( array(
    	'theme_location'  => 'navbar',
    	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
    	'container'       => '',
    	'container_class' => '',
    	'container_id'    => '',
    	'menu_class'      => 'navbar-nav ml-auto mt-2 mt-lg-0',
    	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    	'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
    
  </div>
</nav>