<?php

    // add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
    // function enqueue_parent_styles(){
    //     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // }

?>
<?php
add_action( 'woocommerce_before_cart' , 'add_coupon_notice' );

function add_coupon_notice() { 
    $cart_total = WC()->cart->get_subtotal(); 
    $minimum_amount = 50; 
    $currency_code = get_woocommerce_currency(); 
    wc_clear_notices(); 
    if ( $cart_total < $minimum_amount ) { 
        WC()->cart->remove_coupon( 'COUPON' ); 
        wc_print_notice( "Få 50% rabatt när du handlar för mer än $minimum_amount $currency_code!", 'notice' 
    );
 } else { 
    WC()->cart->apply_coupon( 'COUPON' ); 
    wc_print_notice( 'Du har just fått 50% rabatt på ditt köp!', 'notice' );
} wc_clear_notices();
}


//Detta är våran remove_action för att ta bort den korta produktbeskrivningen på single product page.

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );


?>