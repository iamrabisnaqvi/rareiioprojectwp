<?php global $customtheme; ?>
<footer class="container-fluid">
	<div class="row top">
		<div class="col-sm-12 col-md-3">
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</div>
		<div class="col-sm-12 col-md-1"></div>
		<div class="col-sm-12 col-md-2">
			<?php dynamic_sidebar( 'footer-2' ); ?>
		</div>
		<div class="col-sm-12 col-md-2">
			<?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
		<div class="col-sm-12 col-md-2">
			<?php dynamic_sidebar( 'footer-4' ); ?>
		</div>
		<div class="col-sm-12 col-md-2">
			<?php dynamic_sidebar( 'footer-5' ); ?>
		</div>
	</div>
	<div class="row bottom">
		<div class="col-sm-12 col-md-6 copyright">
			<?php if($customtheme['copyright_text']){?>
               <p><?= $customtheme['copyright_text'] ?></p>
               <?php } ?>
		</div>
		<div class="col-sm-12 col-md-6 footer-menu">
			<!--<ul class="inline">-->
			<!--	<li><a href="#">Pricing</a></li>-->
			<!--	<li><a href="#">Library</a></li>-->
			<!--	<li><a href="#">Blog</a></li>-->
			<!--	<li><a href="#">Contact Us</a></li>-->
			<!--</ul>-->
			<?php
            wp_nav_menu( array(
            	'theme_location'  => 'footer',
            	'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
            	'container'       => '',
            	'container_class' => '',
            	'container_id'    => '',
            	'menu_class'      => 'inline'
            ) );
            ?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>