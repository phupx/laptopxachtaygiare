<script src="<?php bloginfo('template_directory');?>/catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="<?php bloginfo('template_directory');?>/catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory');?>/catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory');?>/catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<script src="<?php bloginfo('template_directory');?>/catalog/view/javascript/common.js" type="text/javascript"></script>
<link href="http://localhost:8080/tintuc/opencart/upload/image/catalog/cart.png" rel="icon" />
<script src="<?php bloginfo('template_directory');?>/catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>

<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

<div class="col-sm-12 col-md-12" style="margin-top:10px;">
                <div id="slideshow0" class="owl-carousel" style="opacity: 1;">
                    <div class="item">
                        <a href="index.php?route=product/product&amp;path=57&amp;product_id=49"><img src="http://localhost:8080/tintuc/opencart/upload/image/cache/catalog/demo/banners/iPhone6-1140x380.jpg" alt="iPhone 6" class="img-responsive" /></a>
                    </div>
                    <div class="item">
                        <img src="http://localhost:8080/tintuc/opencart/upload/image/cache/catalog/demo/banners/MacBookAir-1140x380.jpg" alt="MacBookAir" class="img-responsive" />
                    </div>
                </div>
                <script type="text/javascript"><!--
                    $('#slideshow0').owlCarousel({
                        items: 6,
                        autoPlay: 3000,
                        singleItem: true,
                        navigation: true,
                        navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                        pagination: true
                    });
                    --></script>
    </div>
	<div id="primary" class="content-area">
    
		<main id="main" class="site-main" role="main">
        
        <div class="container">
            <div class="row">
            
			<?php
			/**
			 * @hooked storefront_homepage_content - 10
			 * @hooked storefront_product_categories - 20
			 * @hooked storefront_recent_products - 30
			 * @hooked storefront_featured_products - 40
			 * @hooked storefront_popular_products - 50
			 * @hooked storefront_on_sale_products - 60
			 */
			do_action( 'homepage' ); ?>

            </main><!-- #main -->
            </div><!-- #primary -->
            
            
<?php get_footer(); ?>
