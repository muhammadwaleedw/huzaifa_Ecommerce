<?php
/*********** Disable Gutenberg ************/
add_filter('use_block_editor_for_post', '__return_false', 10);
/*********** Disable Gutenberg ************/

/****************** Add Theme Support *******************/
// Add Title//
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'search_image', 50, 50 );
add_image_size( 'category_slider', 150, 300 );
// add_image_size( 'category_slider', 1920, 800 );
add_theme_support( 'menus' );
// WooCommerce
function floxia_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    require_once 'woocommerce/woo_functions.php';
}
add_action( 'after_setup_theme', 'floxia_woocommerce_support' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
// WooCommerce

//
/****************** Add Theme Support *******************/
/****************** Custom Post Types *******************/
// 01 - Category Slider //
function category_slider_custom_post_type() {
    register_post_type('category_slider',
        array(
            'labels'      => array(
                'name'          => __('Category Slider', 'Category Slider'),
                'singular_name' => __('Category Slider', 'Category Slider'),
                
            ),
                'public'      => true,
                'has_archive' => true,
                'menu_icon'   => 'dashicons-slides',
                'supports' => array( 'thumbnail','title' ),
        )
    );
}

add_action('init', 'category_slider_custom_post_type');
// Category Slider//
// 02 - Main Home Slider //
function main_slider_custom_post_type() {
    register_post_type('main_slider',
        array(
            'labels'      => array(
                'name'          => __('Home Slider', 'Home Slider'),
                'singular_name' => __('Home Slider', 'Home Slider'),
                
            ),
                'public'      => true,
                'has_archive' => true,
                'menu_icon'   => 'dashicons-slides',
                'supports' => array( 'thumbnail','title' ),
        )
    );
}

add_action('init', 'main_slider_custom_post_type');
// Category Slider//

/****************** Custom Post Type *******************/

function load_scripts(){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style( 'core-css', get_template_directory_uri() . '/css/core.css');
    wp_enqueue_style( 'shortcodes', get_template_directory_uri() . '/css/shortcode/shortcodes.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_script( 'modernizr', get_template_directory_uri(). '/js/vendor/modernizr-2.8.3.min.js', array('jquery'), false );
    
    wp_deregister_script('jquery');

    wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, null);
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'plugin', get_template_directory_uri(). '/js/plugins.js', array('jquery'), '', true );
    wp_enqueue_script( 'slick', get_template_directory_uri(). '/js/slick.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'owl', get_template_directory_uri(). '/js/owl.carousel.min.js', array('jquery'), true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri(). '/js/waypoints.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri(). '/js/main.js', array('jquery'), '', true );
    

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


/**************** Live Ajax Search ****************/
// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){
    
$the_query = new WP_Query( array( 'posts_per_page' => 5, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => 'product' ) );
if( $the_query->have_posts() ) :?>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Image</th>
            <th>Details</th>
            
        </tr>
    </thead>
    <tbody> 
   <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
   <tr>
   <td style="width:10%;">
    <a href="<?php echo esc_url( post_permalink() ); ?>" ><?php the_post_thumbnail('search_image');?></a>
    </td>
    <td style="90%">
    <a href="<?php echo esc_url( post_permalink() ); ?>" ><?php the_title();?></a>
   </td>
   <td></td>
</tr>
     
<?php endwhile;
    wp_reset_postdata();  ?>
     </tbody>
</table>
<?php else: 
    echo '<h3>No Results Found</h3>';
endif;

die();

}
// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetchResults(){
	var keyword = jQuery('#searchInput').val();
	if(keyword == ""){
		jQuery('#datafetch').html("");
	} else {
		jQuery.ajax({
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
			type: 'post',
			data: { action: 'data_fetch', keyword: keyword  },
			success: function(data) {
				jQuery('#datafetch').html( data );
			}
		});
	}
    

}
</script>

<?php
}




/**************** Main Menu ****************/
  
function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Header Menu' ),
        'category-menu' => __( 'Category Menu' ),
        'footer_category_menu' => __( 'Footer Category Menu' ),
        'footer_pages_menu' => __( 'Footer Pages Menu' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
/**************** Main Menu ****************/

/**************** Redux Framework ****************/
if(! isset($redux_demo)){
    require_once (dirname(__FILE__).'/theme-config.php'); 
}
/**************** Redux Framework ****************/

/**************** Upload Profile Image ************/
/**
 * Custom Avatar Without a Plugin
 */

// 1. Enqueue the needed scripts.
add_action( "admin_enqueue_scripts", "ayecode_enqueue" );
function ayecode_enqueue( $hook ){
	// Load scripts only on the profile page.
	if( $hook === 'profile.php' || $hook === 'user-edit.php' ){
		add_thickbox();
		wp_enqueue_script( 'media-upload' );
		wp_enqueue_media();
	}
}

// 2. Scripts for Media Uploader.
function ayecode_admin_media_scripts() {
	?>
	<script>
		jQuery(document).ready(function ($) {
			$(document).on('click', '.avatar-image-upload', function (e) {
				e.preventDefault();
				var $button = $(this);
				var file_frame = wp.media.frames.file_frame = wp.media({
					title: 'Select or Upload an Custom Avatar',
					library: {
						type: 'image' // mime type
					},
					button: {
						text: 'Select Avatar'
					},
					multiple: false
				});
				file_frame.on('select', function() {
					var attachment = file_frame.state().get('selection').first().toJSON();
					$button.siblings('#ayecode-custom-avatar').val( attachment.sizes.thumbnail.url );
					$button.siblings('.custom-avatar-preview').attr( 'src', attachment.sizes.thumbnail.url );
				});
				file_frame.open();
			});
		});
	</script>
	<?php
}
add_action( 'admin_print_footer_scripts-profile.php', 'ayecode_admin_media_scripts' );
add_action( 'admin_print_footer_scripts-user-edit.php', 'ayecode_admin_media_scripts' );


// 3. Adding the Custom Image section for avatar.
function custom_user_profile_fields( $profileuser ) {
	?>
	<h3><?php _e('Custom Local Avatar', 'ayecode'); ?></h3>
	<table class="form-table ayecode-avatar-upload-options">
		<tr>
			<th>
				<label for="image"><?php _e('Custom Local Avatar', 'ayecode'); ?></label>
			</th>
			<td>
				<?php
				// Check whether we saved the custom avatar, else return the default avatar.
				$custom_avatar = get_the_author_meta( 'ayecode-custom-avatar', $profileuser->ID );
				if ( $custom_avatar == '' ){
					$custom_avatar = get_avatar_url( $profileuser->ID );
				}else{
					$custom_avatar = esc_url_raw( $custom_avatar );
				}
				?>
				<img style="width: 96px; height: 96px; display: block; margin-bottom: 15px;" class="custom-avatar-preview" src="<?php echo $custom_avatar; ?>">
				<input type="text" name="ayecode-custom-avatar" id="ayecode-custom-avatar" value="<?php echo esc_attr( esc_url_raw( get_the_author_meta( 'ayecode-custom-avatar', $profileuser->ID ) ) ); ?>" class="regular-text" />
				<input type='button' class="avatar-image-upload button-primary" value="<?php esc_attr_e("Upload Image","ayecode");?>" id="uploadimage"/><br />
				<span class="description">
					<?php _e('Please upload a custom avatar for your profile, to remove the avatar simple delete the URL and click update.', 'ayecode'); ?>
				</span>
			</td>
		</tr>
	</table>
	<?php
}
add_action( 'show_user_profile', 'custom_user_profile_fields', 10, 1 );
add_action( 'edit_user_profile', 'custom_user_profile_fields', 10, 1 );


// 4. Saving the values.
add_action( 'personal_options_update', 'ayecode_save_local_avatar_fields' );
add_action( 'edit_user_profile_update', 'ayecode_save_local_avatar_fields' );
function ayecode_save_local_avatar_fields( $user_id ) {
	if ( current_user_can( 'edit_user', $user_id ) ) {
		if( isset($_POST[ 'ayecode-custom-avatar' ]) ){
			$avatar = esc_url_raw( $_POST[ 'ayecode-custom-avatar' ] );
			update_user_meta( $user_id, 'ayecode-custom-avatar', $avatar );
		}
	}
}


// 5. Set the uploaded image as default gravatar.
add_filter( 'get_avatar_url', 'ayecode_get_avatar_url', 10, 3 );
function ayecode_get_avatar_url( $url, $id_or_email, $args ) {
	$id = '';
	if ( is_numeric( $id_or_email ) ) {
		$id = (int) $id_or_email;
	} elseif ( is_object( $id_or_email ) ) {
		if ( ! empty( $id_or_email->user_id ) ) {
			$id = (int) $id_or_email->user_id;
		}
	} else {
		$user = get_user_by( 'email', $id_or_email );
		$id = !empty( $user ) ?  $user->data->ID : '';
	}
	//Preparing for the launch.
	$custom_url = $id ?  get_user_meta( $id, 'ayecode-custom-avatar', true ) : '';
	
	// If there is no custom avatar set, return the normal one.
	if( $custom_url == '' || !empty($args['force_default'])) {
		return esc_url_raw( 'https://wpgd-jzgngzymm1v50s3e3fqotwtenpjxuqsmvkua.netdna-ssl.com/wp-content/uploads/sites/12/2020/07/blm-avatar.png' ); 
	}else{
		return esc_url_raw($custom_url);
	}
}
/**************** Upload Profile Image ************/



?>
