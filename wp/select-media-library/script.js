var SelectMediaLibrary = (function() {
    /**
     * Open media library and get selected items data.
     */

    var frame;
    var dashboard = $('#panel-backend');

    // OPEN MEDIA MODAL
    dashboard.on('click', '.open-media-library', function(event) {
        event.preventDefault();

        // if the media frame already exists, reopen it
        if ( frame ) {
            frame.open();
            return;
        }

        // create new media frame
        frame = wp.media({
            title: 'Select image',
            button: {
                text: 'Use this media'
            },
            multiple: true
        });

        // when an image is selected in the media frame...
        frame.on('select', function() {

            // get media attachments details from the frame
            var attachments = frame.state().get('selection').toJSON();

            for (var i = 0; i < attachments.length; i++) {
                console.log(attachments[i]);
            }
        });

        // open the modal on click
        frame.open();
    });

})(); // !SelectMediaLibrary
