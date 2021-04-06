<?php 
$the_query = new WP_Query( array( 'posts_per_page' => 5, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => 'post' ) );
    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>
		<a href="<?php echo esc_url( post_permalink() ); ?>"><?php the_post_thumbnail();?></a>
        <h2><a href="<?php echo esc_url( post_permalink('thumbnail') ); ?>"><?php the_title();?></a></h2>
        
  <?php endwhile;
		wp_reset_postdata();  
	else: 
		echo '<h3>No Results Found</h3>';
    endif;

    die();