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
 * 
 * @return string
 * 
 * @since 0.5.0
 */
function kha_create_lightbox( $text, $lightbox_id = 'kha-lightbox' ) {

    $lightbox = <<<LIGHTBOX
        <div id="$lightbox_id" class="kha-lightbox-wrap">
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
function kha_lightbox( $text, $lightbox_id = 'kha-lightbox' ) {
    echo kha_create_lightbox( $text, $lightbox_id );
}