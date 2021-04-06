<?php 
// Reordering Single Product Page//
add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash' );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );


 add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );
 function woo_reorder_tabs( $tabs ) {
    if(get_comments_number() > 0){
        $tabs['reviews']['priority'] = 5;           // Reviews first
        $tabs['description']['priority'] = 10;      // Description second
    }
    return $tabs;
}
// Reordering Single Product Page//
/**
 * Checkout Fields Customization - Billing Form (woocommerce/templates/checkout/form-billing.php)
 * Hook woocommerce_checkout_fields
 */

function custom_checkout_fields( $fields ) {

    // Dissable these fields
    unset( $fields['billing']['billing_company'] );
    unset( $fields['billing']['billing_last_name'] );
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['billing']['billing_postcode'] );
    // Dissable these fields

    // Change Placeholder
    $fields['billing']['billing_first_name']['placeholder'] = 'Enter your name'; 
    $fields['billing']['billing_first_name']['label'] = 'Enter your name'; 
    // Change Placeholder

    // Change Priority 

    // Change Priority 
    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'custom_checkout_fields' );
add_filter( 'woocommerce_checkout_fields', 'misha_email_first' );
 
function misha_email_first( $checkout_fields ) {
	$checkout_fields['billing']['billing_first_name']['priority'] = 0;
	$checkout_fields['billing']['billing_email']['priority'] = 1;
	$checkout_fields['billing']['billing_phone']['priority'] = 2;
	return $checkout_fields;
}


/**
 * Checkout Fields Customization - Billing Form (woocommerce/templates/checkout/form-billing.php)
 */

function custom_mini_cart() { 
    echo '<a href="#" class="dropdown-back" data-toggle="dropdown"> ';
    echo '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
    echo '<div class="basket-item-count" style="display: inline;">';
        echo '<span class="cart-items-count count">';
            echo WC()->cart->get_cart_contents_count();
        echo '</span>';
    echo '</div>';
    echo '</a>';
    echo '<ul class="dropdown-menu dropdown-menu-mini-cart">';
        echo '<li> <div class="widget_shopping_cart_content">';
                  woocommerce_mini_cart();
            echo '</div></li></ul>';

      }
       add_shortcode( '[custom-techno-mini-cart]', 'custom_mini_cart' );

?>