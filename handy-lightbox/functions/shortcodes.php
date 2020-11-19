<?php

/**
 * Create a button that will open a lightbox
 * 
 * @since 2020-Nov-19
 */
add_shortcode( 'handy_lightbox_button', 'khahl_get_lightbox_button' );

function khahl_get_lightbox_button( $atts, $content = '' ) {
    
    $atts = shortcode_atts( array(
        'text' => 'Click Me',
        'class' => '',
    ), $atts, 'handy_lightbox_button' );

    $lightbox_id = 'lightbox-' . rand( 1, 99999 );

    $output = '<button style="cursor: pointer;" data-lightbox-id="' . $lightbox_id . '" class="kha-lightbox-trigger ' . $atts['class'] . '">' . $atts['text'] . '</button>';
    $output .= kha_create_lightbox( $content, $lightbox_id );
 
    return $output;
}