<?php

/**
 * Enqueue scripts and styles
 * 
 * @since 0.5.0
 */
add_action( 'wp_enqueue_scripts', 'kha_lb_scripts_and_styles' );

function kha_sam_scripts_and_styles() {
    wp_enqueue_style( 'kha-lightbox', KHA_LIGHTBOX_URL . '/resources/css/handy-lightbox.min.css?v=' . kha_get_version_from_timestamp( KHA_LIGHTBOX_PATH . '/resources/css/handy-lightbox.min.css' ) );
    wp_enqueue_script( 'kha-lightbox', KHA_LIGHTBOX_URL . '/resources/js/handy-lightbox.js?v='. kha_get_version_from_timestamp( KHA_LIGHTBOX_PATH . '/resources/js/handy-lightbox.js' ), array( 'jquery' ), null, true );
}