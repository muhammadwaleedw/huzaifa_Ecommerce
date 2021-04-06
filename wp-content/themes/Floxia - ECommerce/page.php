<?php get_template_part( 'template-parts/front_page/header', 'header' );?>

<?php 
get_header();
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_content();
    endwhile; 
endif; 
?>






<?php get_template_part( 'template-parts/front_page/footer', 'footer' );?>  