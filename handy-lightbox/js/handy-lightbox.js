jQuery( document ).ready( function() {
    kha_set_up_lightbox();
 });
 
/**
 * Setup the lightbox functionality
 */
function kha_set_up_lightbox() {
console.log('set');
    /**
     * Open lightbox when cliking on the trigger
     */
    jQuery( '.kha-lightbox-trigger' ).click( function() {
        var ligthbox_to_open_id = jQuery(this).attr('data-lightbox-id');

        kha_open_lightbox(ligthbox_to_open_id);
    });

    /**
     * Close lightbox when clicking outside it, in the dark overlay
     */
    jQuery( '.kha-lightbox-wrap:not(.hardtoclose)' ).click( function() {
        kha_close_lightbox();
    });
 
    /**
     * Stop event propagation when clicking inside the ligthbox, to avoid the previous trigger
     */
    jQuery( '.kha-lightbox' ).click( function(event) {
        event.stopPropagation();
    });
 
    /**
     * Lightbox close button
     */
    jQuery('.kha-lightbox').on('click', '.kha-lightbox-close-mech', function(){
        kha_close_lightbox();
    });

    /**
     * Setup timed lightboxes
     */ 
    jQuery('.kha-lightbox-wrap.timed').each(function() { 
        var timed_lightbox = jQuery(this);
        var time_ms = timed_lightbox.attr('data-timing') * 1000;
        
        setTimeout( function() { 
            kha_open_lightbox(timed_lightbox.attr('id'));
        }, time_ms );
    });
}

/**
 * Open the lightbox with the given ID
 */
function kha_open_lightbox( id ) {
    lightbox = jQuery( '#' + id );
    lightbox.show();
    setTimeout( function() { lightbox.css( 'opacity', '1' ); }, 100 );
}

/**
 * Close currently open lightbox
 */
function kha_close_lightbox() {
    lightbox = jQuery('.kha-lightbox-wrap');
    lightbox.css('opacity', '0');
    lightbox.hide();
}
 