<?php 
/**
 * Template Name: Contact us
 */
global $redux_demo;
?>

<?php echo get_template_part( "template-parts/front_page/header", "header" ); ?>
<?php echo get_template_part( "template-parts/front_page/breadcrumb", "breadcrumb" ); ?>

        <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="htc__contact__container">
                            <div class="htc__contact__address">
                                <h2 class="contact__title">contact info</h2>
                                <div class="contact__address__inner">
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-location-pin"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p>Location : <br> <?php echo $redux_demo['contact_address'];?></p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                </div>
                                <div class="contact__address__inner">
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-mobile"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p> Phone : <br><a href="#"><?php echo $redux_demo['contact_phone'];?></a></p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-email"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p> Mail :<br><a href="#"><?php echo $redux_demo['contact_email'];?></a></p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                </div>
                            </div>
                            
                       
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                        <div class="map-contacts">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d452.2267133987462!2d67.07855850297558!3d24.938415501108317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f5b066c75db%3A0x68eb2bc8c2a4825a!2sCafe%20Plaza!5e0!3m2!1sen!2s!4v1617544247949!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->


<?php echo get_template_part( "template-parts/front_page/footer", "footer" ); ?>

