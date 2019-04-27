<?php
/**
 * Main Lightbox functions
 * 
 * @since 0.5.0
 */

/**
 * Creates a lightbox
 * 
 * @param string $text The text to display in the lightbox
 * @param string $lightbox_id The ID for the lightbox
 * @param array $args | keys -> 'timed' | number of seconds before it opens automatically
 *                              'hidecookiename' | the name of the cookie which, if present, will prevent the lightbox from showing
 *                              'hardtoclose' | bool - if true, then the lightbox can only be closed with the X button
 * 
 * @return string
 * 
 * @since 0.5.0
 */
function kha_create_lightbox( $text, $lightbox_id = 'kha-lightbox', $args = [] ) {

    // If the hide cookie is present, don't open the lightbox
    if ( isset( $args['hidecookiename'] ) ) {

        $hide_cookie = $args['hidecookiename'];

        if ( isset( $_COOKIE[$hide_cookie] ) ) {
            return '';
        }
    }

    $lightbox_class = 'kha-lightbox-wrap';
    $extra_attrs = '';

    // If it's a timed lightbox
    if ( isset( $args['timed'] ) && is_numeric( $args['timed'] ) )  {
        $lightbox_class .= ' timed';
        $extra_attrs = 'data-timing="' . (int) $args['timed'] . '"';
    }

    // If it's a hard to close lightbox
    if ( isset( $args['hardtoclose'] ) && $args['hardtoclose'] === true ) {
        $lightbox_class .= ' hardtoclose';
    }

    // Prepare the text
    $text = do_shortcode( $text );

    // Lightbox html
    $lightbox = <<<LIGHTBOX
        <div id="{$lightbox_id}" class="{$lightbox_class}" {$extra_attrs} >
            <div class="kha-lightbox">
                <div class="kha-lightbox-close kha-lightbox-close-mech"></div>
                $text
            </div>
        </div>
LIGHTBOX;

    return $lightbox;
}

/**
 * Creates and outputs a lightbox
 * 
 * @see kha_create_lightbox()
 * 
 * @since 0.5.0
 */
function kha_lightbox( $text, $lightbox_id = 'kha-lightbox', $args = [] ) {
    echo kha_create_lightbox( $text, $lightbox_id, $args );
}