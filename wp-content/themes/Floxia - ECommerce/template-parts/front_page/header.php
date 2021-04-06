<?php get_header();?>
<body <?php body_class();?>>
<?php global $redux_demo;?>
<?php global $woocommerce;?>
<?php global $product;?>
<?php $items = $woocommerce->cart->get_cart();?>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                            <div class="logo">
                                <a href="<?php echo get_home_url(); ?>">
                                    <img src="<?php echo $redux_demo['home_logo_main']['url'];?>" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                            <nav class="mainmenu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                   <?php wp_nav_menu( array( 
                                       'theme_location' => 'main-menu',
                                       'menu_class'           => 'main__menu',
                                    ) ); ?>

                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="#">portfolio</a>
                                            <ul>
                                                <li><a href="portfolio-card-box-2.html">portfolio</a></li>
                                                <li><a href="single-portfolio.html">Single portfolio</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog</a>
                                            <ul>
                                                <li><a href="blog.html">blog 3 column</a></li>
                                                <li><a href="blog-details.html">Blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="customer-review.html">customer review</a></li>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="team.html">team</a></li>
                                                <li><a href="login-register.html">login & register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>                          
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-sm-4 col-xs-3">  
                            <ul class="menu-extra">
                            
                                <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                                <li><a href="login-register.html"><span class="ti-user"></span></a></li>
                                <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                                <?php if ( WC()->cart->get_cart_contents_count() != 0 ) {?>
                               <span class="cart_count_custom"><?php echo $woocommerce->cart->cart_contents_count;?></span>
                            <?php }
                            else{?>
                                <span></span>
                            <?php }
                                ?>
                                
                                <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
        
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="<?php echo esc_url( home_url('/'))?>" id="searchform" method="get" autocomplete="off">
                                    <input id="searchInput" onkeyup="fetchResults()" name="s" placeholder="<?php esc_html_e( 'search', 'floxia' );?>" type="text">
                                    <button type="submit"></button>
                                    <div id="datafetch" style="height:200px; overflow:scroll;">
                                    
                                    </div>
                                    
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <div class="offsetmenu">
                <div class="offsetmenu__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="off__contact">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo $redux_demo['home_logo_main']['url'];?>" alt="logo">
                            </a>
                        </div>
                        <p><?php echo $redux_demo['about_us_logo_tets'];?></p>
                    </div>
                    <div class="offset__sosial__share">
                        <h4 class="offset__title">Follow Us On Social</h4>
                        <ul class="off__soaial__link">
                        <li><a class="bg--facebook" href="<?php echo $redux_demo['facebook']; ?>" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="bg--instagram" href="<?php echo $redux_demo['instagram_1']; ?>" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <?php foreach($items as $item => $values) {
                    $_product           =  wc_get_product( $values['data']->get_id());
                    $price              = get_post_meta($values['product_id'] , '_price', true);
                    $getProductDetail   = wc_get_product( $values['product_id'] );
                    ?>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="<?php echo $_product->get_permalink();?>">
                                    <?php echo $getProductDetail->get_image('search_image');?>
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="<?php echo $_product->get_permalink();?>">
                                    <?php echo $_product->get_title();?></a></h2>
                                <span class="quantity">QTY: <?php echo $values['quantity'];?></span>
                                <span class="shp__price"><?php echo $price;?></span>
                            </div>
                        </div>
                        
                    </div>
                    
                    <?php } ?>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price"><?php echo WC()->cart->get_cart_subtotal();?></li>
                       
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="<?php echo wc_get_cart_url();?>">View Cart</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
