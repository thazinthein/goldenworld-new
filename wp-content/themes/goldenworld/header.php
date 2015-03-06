<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>


	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	
	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">     
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">   
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/template.css" rel="stylesheet">
    
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /> 
   	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
   	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div  class="sticky_header">
    <div class="overflow_wrapper">
	<header>
          	<div class="container">
              	<div class="row">
	              	<div class="col-md-5">
	              		<div class="logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory');?>/images/logo.png" class="img-responsive"></a></div>
	              	</div>
	               <!-- MAIN MENU -->

	              	<div class="col-md-7">
	              		<div class="row">
	              			<div class="col-md-6">
		              			<div class="quote-wrapper">
					                <?php global $woocommerce ?>
					                    <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
					                        <span>  Quotation : </span>
					                        <span>
					                            <?php echo sprintf(_n('%d item', '%d Item', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?> 
					                        </span>
					                	</a> 
					            </div>
					        </div>
					        <div class="col-md-6">
			              		<div class="search-wrapper">
					                <?php  
						                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-sidebar') ) :
						                    endif; 
						            ?>
					            </div>
					        </div>
				        </div>
				        <div class="row">
		                    <div class="navbar navbar-default topnav" role="navigation">
				                <div class="navbar-header">
				                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				                    <span class="sr-only">Toggle navigation</span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                  </button>
				                  <a class="navbar-brand" href="#">Menu</a>
				                </div>
				                <div class="navbar-collapse collapse" role="navigation">
				                   	<?php 
				                   		wp_nav_menu( array(
											'container' => false, 
											'menu_id' => 'nav', 
											'depth' => 0,
											'theme_location' => 'primary', 
											//this is the important part, we tell it to use the nav walker we just wrote
											'walker' => new ik_walker())
										);
				                   	?>	 
				                </div>
				            </div>
						</div>
	              	</div>

	               <!-- /MAIN MENU -->

	              	<div class="triangle-up-left"></div>
	              	<div class="triangle-up-right"></div>
              </div>
          	</div>
    </header>
	</div>	
</div>
         
          			
    			

	    	
	    
		

			
		

