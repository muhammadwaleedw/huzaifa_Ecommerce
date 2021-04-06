<?php
/**
 * Template Name: Home
 */
// Header 
get_template_part( 'template-parts/front_page/header', 'header' );
// Header
global $woocommerce;
global $product;
global $redux_demo;
$cat_01 = $redux_demo['home_sec_cat_01'];
$cat_02 = $redux_demo['home_sec_cat_02'];
$cat_03 = $redux_demo['home_sec_cat_03'];
?>
        <!-- Start Feature Product -->
        
        <section class="categories-slider-area bg__white">
            <div class="container">
                <div class="row">
                    <!-- Start Left Feature -->
                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
                        <!-- Start Slider Area -->
                        <div class="slider__container slider--one">
                            <div class="slider__activation__wrap owl-carousel owl-theme">
                                <!-- Start Single Slide -->
                                
                                <?php 
                                    $args = array(  
                                        'post_type' => 'main_slider',
                                        'post_status' => 'publish',
                                        'orderby' => 'title', 
                                        'order' => 'ASC', 
                                    );
                                $loop = new WP_Query( $args ); 
                                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <?php
                                    $background_image = get_field('select_background_image');
                                    $heading = get_field('main_heading');
                                    $subheading = get_field('sub_heading');
                                    $shop = get_field('shop_now');
                                    
                                    ?>
                                <div class="slide slider__full--screen slider-height-inherit slider-text-right" style="background: rgba(0, 0, 0, 0) url(<?php echo $background_image['url']?>) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1><?php echo $heading;?> <span class="text--theme"><?php echo $subheading?></span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="<?php echo esc_url($shop)?>">shop now </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide -->
                                <?php    endwhile;
                                wp_reset_postdata(); ?>
                            </div>
                        </div>
                        <!-- Start Slider Area -->
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                        <div class="categories-menu mrg-xs">
                            <div class="category-heading">
                               <h3> Browse Categories</h3>
                            </div>
                            <div class="category-menu-list">
                                <ul>
                                <?php wp_nav_menu( array( 
                                       'theme_location' => 'category-menu',
                                       'menu_class'           => '',
                                    ) ); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Left Feature -->
                </div>
            </div>
        </section>
        <!-- End Feature Product -->
        <div class="only-banner ptb--100 bg__white">
            <div class="container">
                <div class="only-banner-img">
                    <a href="shop-sidebar.html"><img src="<?php echo $redux_demo['full_ad_01']['url'];?>" alt="new product"></a>
                </div>
                <div class="owl-carousel" style="top:50px;">
                    <?php 
                     $args = array(  
                        'post_type' => 'category_slider',
                        'post_status' => 'publish',
                       
                        'orderby' => 'title', 
                        'order' => 'ASC', 
                    );
                
                    $loop = new WP_Query( $args ); 
                        
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                       <?php
                       $link = get_field('category_url');
                      
                       ?>
                    <a href="<?php echo esc_url( $link['url']); ?>"><?php the_post_thumbnail('category_slider');?></a>
                <?php    endwhile;
                
                    wp_reset_postdata(); 
                    ?>
                </div>
            </div>
        </div>
        <!-- Start Our Product Area -->
<section class="htc__product__area bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="product-categories-all">
                    <div class="product-categories-title">
                        <h3>Jewelry & watches</h3>
                    </div>
                    <div class="product-categories-menu">
                        <img src="<?php echo $redux_demo['Half_ad_01']['url']?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-style-tab">
                    <div class="product-tab-list">
                        <!-- Nav tabs -->
                        <ul class="tab-style" role="tablist">
                            <li class="active">
                                <a href="#home5" data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4><strong><?php echo $redux_demo['home_sec_01'];?></strong></h4>
                                    </div>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
<div class="tab-content another-product-style jump">
    <div class="tab-pane active" id="home5">
        <div class="row">
            <div class="product-slider-active owl-carousel">
               
                <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'product_cat' => $cat_01, 'orderby' => 'desc' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();  ?>
                <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                    <div class="product">
                        <div class="product__inner">
                            <div class="pro__thumb">
                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
                               
                            </div>
                            <div class="product__hover__info">
                            </div>
                        </div>
                        <div class="product__details">
                            <h2><?php the_title(); ?></h2>
                            <ul class="product__price">
                                <li class=""><?php echo $product->get_price_html(); ?></li>
                                <li></li>
                            </ul>
                            <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                            <?php $a = get_permalink( $loop->post->ID )?>
                            <?php echo do_shortcode('[woosq]');?>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                
            </div>
        </div>
    </div>
    
    
</div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- End Our Product Area -->
        <div class="only-banner ptb--100 bg__white">
            <div class="container">
                <div class="only-banner-img">
                    <a href="shop-sidebar.html"><img src="<?php echo $redux_demo['full_ad_02']['url']; ?>" alt="new product"></a>
                </div>
            </div>
        </div>
        <!-- Start Our Product Area -->
        <section class="htc__product__area pb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-categories-all">
                            <div class="product-categories-title">
                                <h3>BAGS & SHOES</h3>
                            </div>
                            <div class="product-categories-menu">
                               <img src="<?php echo $redux_demo['half_ad_02']['url'];?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                <div class="product-style-tab">
                    <div class="product-tab-list">
                        <!-- Nav tabs -->
                        <ul class="tab-style" role="tablist">
                            <li class="active">
                                <a href="#home5" data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4><strong><?php echo $redux_demo['home_sec_02'];?></strong></h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content another-product-style jump">
    <div class="tab-pane active" id="home5">
        <div class="row">
            <div class="product-slider-active owl-carousel">
               
                <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'product_cat' => $cat_02, 'orderby' => 'rand' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();  ?>
                <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                    <div class="product">
                        <div class="product__inner">
                            <div class="pro__thumb">
                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
                               
                            </div>
                            <div class="product__hover__info">
                            </div>
                        </div>
                        <div class="product__details">
                            <h2><?php the_title(); ?></h2>
                            <ul class="product__price">
                                <li class=""><?php echo $product->get_price_html(); ?></li>
                                <li></li>
                            </ul>
                            <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                            <?php $a = get_permalink( $loop->post->ID )?>
                            <?php echo do_shortcode('[woosq]');?>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

</div>
            </div>
        </section>
        <!-- End Our Product Area -->
        <div class="only-banner bg__white">
            <div class="container">
                <div class="only-banner-img">
                    <a href="shop-sidebar.html"><img src="<?php echo $redux_demo['full_ad_03']['url']; ?>" alt="new product"></a>
                </div>
            </div>
        </div>
        <!-- Start Our Product Area -->
        <section class="htc__product__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-categories-all">
                            <div class="product-categories-title">
                                <h3>kids & MOTHER</h3>
                            </div>
                            <div class="product-categories-menu">
                            <a href="#"><img src="<?php echo $redux_demo['half_ad_03']['url']?>" alt="brand images"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="product-style-tab">
                            <div class="product-tab-list">
                                <!-- Nav tabs -->
                                <ul class="tab-style" role="tablist">
                            <li class="active">
                                <a href="#home5" data-toggle="tab">
                                    <div class="tab-menu-text">
                                        <h4><strong><?php echo $redux_demo['home_sec_03'];?></strong></h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                                
                            </div>
                            <div class="tab-content another-product-style jump">
    <div class="tab-pane active" id="home5">
        <div class="row">
            <div class="product-slider-active owl-carousel">
               
                <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'product_cat' => $cat_03, 'orderby' => 'rand' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();  ?>
                <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                    <div class="product">
                        <div class="product__inner">
                            <div class="pro__thumb">
                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
                               
                            </div>
                            <div class="product__hover__info">
                            </div>
                        </div>
                        <div class="product__details">
                            <h2><?php the_title(); ?></h2>
                            <ul class="product__price">
                                <li class=""><?php echo $product->get_price_html(); ?></li>
                                <li></li>
                            </ul>
                            <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                            <?php $a = get_permalink( $loop->post->ID )?>
                            <?php echo do_shortcode('[woosq]');?>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>              
            </div>
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
        <!-- Start Choose Us Area -->
        <section class="htc__choose__us__ares bg__white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="video__wrap" data--black__overlay="5" style="background: rgba(0, 0, 0, 0) url('<?php echo $redux_demo['why_choose_us_main_img']['url']?>') no-repeat scroll center center / cover ;">
                            <div class="video__inner">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="htc__choose__wrap bg__cat--4">
                            <h2 class="choose__title"><?php echo $redux_demo['why_choose_us_heading'];?></h2>
                            <div class="choose__container">
                                <div class="single__chooose">
                                    <div class="choose__us">
                                        <div class="choose__icon">
                                            <img src="<?php echo $redux_demo['why_choose_us_icon_01']['url']?>" alt="">
                                        </div>
                                        <div class="choose__details">
                                            <h4><?php echo $redux_demo['why_choose_us_service_01'];?></h4>
                                            <p><?php echo $redux_demo['why_choose_us_para_01'];?></p>
                                        </div>
                                    </div>
                                    <div class="choose__us">
                                        <div class="choose__icon">
                                        <img src="<?php echo $redux_demo['why_choose_us_icon_02']['url']?>" alt="">
                                        </div>
                                        <div class="choose__details">
                                            <h4><?php echo $redux_demo['why_choose_us_service_02'];?></h4>
                                            <p><?php echo $redux_demo['why_choose_us_para_02'];?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single__chooose">
                                    <div class="choose__us">
                                        <div class="choose__icon">
                                        <img src="<?php echo $redux_demo['why_choose_us_icon_03']['url']?>" alt="">
                                        </div>
                                        <div class="choose__details">
                                            <h4><?php echo $redux_demo['why_choose_us_service_03'];?></h4>
                                            <p><?php echo $redux_demo['why_choose_us_para_03'];?></p>
                                        </div>
                                    </div>
                                    <div class="choose__us">
                                        <div class="choose__icon">
                                        <img src="<?php echo $redux_demo['why_choose_us_icon_04']['url']?>" alt="">
                                        </div>
                                        <div class="choose__details">
                                            <h4><?php echo $redux_demo['why_choose_us_service_04'];?></h4>
                                            <p><?php echo $redux_demo['why_choose_us_para_04'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Choose Us Area -->
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white pt--120 ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title section__title--2 text-center">
                            <h2 class="title__line">Latest News</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog__wrap clearfix mt--60 xmt-30">
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog fo o">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.html">
                                            <img src="<?php echo get_template_directory_uri().'/images/blog/bl'?>og-img/1.jpg" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.html">
                                            <img src="<?php echo get_template_directory_uri().'/images/blog/bl'?>og-img/2.jpg" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.html">
                                            <img src="<?php echo get_template_directory_uri().'/images/blog/bl'?>og-img/3.jpg" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
<!-- Start brand Area -->
<div class="htc__brand__area bg__white ptb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="brand__list">
                            <li><a href="#">
                                <img src="<?php echo $redux_demo['brand_01']['url'];?>" alt="brand images">
                            </a></li>
                            <li><a href="#">
                                <img src="<?php echo $redux_demo['brand_02']['url'];?>" alt="brand images">
                            </a></li>
                            <li><a href="#">
                                <img src="<?php echo $redux_demo['brand_03']['url'];?>" alt="brand images">
                            </a></li>
                            <li><a href="#">
                                <img src="<?php echo $redux_demo['brand_04']['url'];?>" alt="brand images">
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End brand Area -->
        <!-- Start Footer Area -->
<?php get_template_part( 'template-parts/front_page/footer','footer' )?>