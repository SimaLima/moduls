var JSAjax = (function() {
    /**
     * Send and receive AJAX request.
     */


    // TRIGGER AJAX CALL
    $('#element').on('click', '.submit', function(event) {
        event.preventDefault();
        ajaxCall('value');
    });


    // AJAX CALL FUNCTION
    function ajaxCall(data) {
        $.ajax({
            url: LOCALIZE.ajaxurl,
            type: 'POST',
            data: {
                action: 'ajax_callback',
                data: data,
                security: LOCALIZE.security
            },
            success: function( response ) {
                if ( response.success === true ) {
                    // wp_send_json_success
                    handleResponseSuccess(response.data);
                }
                else {
                    // wp_send_json_error  -  This will work properly if WP_DEBUG is FALSE in WP-config.php
                    handleResponseFailure(response.data);
                }
            }
        });
    }


    // HANDLE AJAX SUCCESS
    function handleResponseSuccess(response) {}

    // HANDLE AJAX FAILURE
    function handleResponseFailure(response) {}

})(); // !JSAjax
