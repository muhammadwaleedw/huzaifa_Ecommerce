<?php get_template_part( 'template-parts/front_page/header', 'header' ); 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title( '<h2>', '</h2>' ); 
        the_post_thumbnail(); 
        the_excerpt();
    endwhile; 
else: 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 

?>
<?php // get_template_part( 'template-parts/front_page/breadcrumb', 'breadcrumb' );?>
        <!-- Start Our Blog Area -->
        <section class="blog-details-wrap ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="blog-details-left-sidebar">
                            <div class="blog-details-top">
                                <!--Start Blog Thumb -->
                                <div class="blog-details-thumb-wrap">
                                    <div class="blog-details-thumb">
                                        <img src="images/blog/big-images/1.jpg" alt="blog images">
                                    </div>
                                    <div class="upcoming-date">
                                        14<span class="upc-mth">Sep,2017</span>
                                    </div>
                                </div>
                                <!--End Blog Thumb -->
                                <h2>It is a long established fact that a reader will</h2>
                                <div class="blog-admin-and-comment">
                                    <p>BY : <a href="#">ADMIN</a></p>
                                    <p class="separator">|</p>
                                    <p>3 COMMENTS</p>
                                </div>
                                <!-- Start Blog Pra -->
                                <div class="blog-details-pra">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore d aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>

                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore d aliqua. Ut enim ad minim veniam, </blockquote>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol orea magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                                </div>
                                <!-- End Blog Pra -->
                                <!-- Start Blog Tags -->
                                <div class="postandshare">
                                    <div class="post">
                                        <p>TAGS :</p>
                                    </div>
                                    <div class="blog-social-icon">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Blog Tags -->
                                <!-- Start Blog Comment Area -->
                                <div class="our-blog-comment mt--20">
                                    <div class="blog-comment-inner">
                                        <h2 class="section-title-2">COMMENTS (03)</h2>
                                        <!-- Start Single Comment -->
                                        <div class="single-blog-comment">
                                            <div class="blog-comment-thumb">
                                                <img src="images/comment/1.jpg" alt="comment images">
                                            </div>
                                            <div class="blog-comment-details">
                                                <div class="comment-title-date">
                                                    <h2><a href="#">Martin Payet</a></h2>
                                                    <div class="reply">
                                                        <p>14 Sep 2017 / <a href="#">REPLY</a></p>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </div>
                                        </div>
                                        <!-- End Single Comment -->
                                        <!-- Start Single Comment -->
                                        <div class="single-blog-comment comment-reply">
                                            <div class="blog-comment-thumb">
                                                <img src="images/comment/2.jpg" alt="comment images">
                                            </div>
                                            <div class="blog-comment-details">
                                                <div class="comment-title-date">
                                                    <h2><a href="#">Martin Payet</a></h2>
                                                    <div class="reply">
                                                        <p>14 Sep 2017 / <a href="#">REPLY</a></p>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </div>
                                        </div>
                                        <!-- End Single Comment -->
                                        <!-- Start Single Comment -->
                                        <div class="single-blog-comment">
                                            <div class="blog-comment-thumb">
                                                <img src="images/comment/3.jpg" alt="comment images">
                                            </div>
                                            <div class="blog-comment-details">
                                                <div class="comment-title-date">
                                                    <h2><a href="#">Martin Payet</a></h2>
                                                    <div class="reply">
                                                        <p>14 Sep 2017 / <a href="#">REPLY</a></p>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </div>
                                        </div>
                                        <!-- End Single Comment -->
                                    </div>
                                </div>
                                <!-- End Blog Comment Area -->
                                <!-- Start Reply Form -->
                                <div class="our-reply-form-area mt--20">
                                    <h2 class="section-title-2">LEAVE A REPLY</h2>
                                    <div class="reply-form-inner mt--40">
                                        <div class="reply-form-box">
                                            <div class="reply-form-box-inner">
                                                <div class="rfb-single-input">
                                                    <input type="text" placeholder="Name*">
                                                </div>
                                                <div class="rfb-single-input">
                                                    <input type="email" placeholder="Email*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply-form-box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="blog__details__btn">
                                            <a class="htc__btn btn--gray" href="#">submit</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Reply Form -->
                            </div>
                        </div>
                    </div>
                    <?php get_template_part( 'template-parts/blog/sidebar', 'sidebar' );?>
                </div>
            </div>
        </section>
        <!-- End Our Blog Area -->  

        <!-- Start Footer Area -->
 <?php get_template_part( 'template-parts/front_page/footer', 'footer' );?>