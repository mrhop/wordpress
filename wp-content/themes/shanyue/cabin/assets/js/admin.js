import '../scss/admin.scss'

const admin = {
    customMedia: () => {
        let frame,
            metaBox = document.querySelector('.shanyue-page-sections'), // Your meta box id here
            addImgLink = metaBox.find('.upload-custom-img'),
            delImgLink = metaBox.find('.delete-custom-img'),
            imgContainer = metaBox.find('.custom-img-container'),
            imgIdInput = metaBox.find('.custom-img-id');
        addImgLink.addEventListener('click', function (event) {

            event.preventDefault();

            // If the media frame already exists, reopen it.
            if (frame) {
                frame.open();
                return;
            }

            // Create a new media frame
            /* eslint no-undef: "off"*/
            frame = wp.media({
                title: 'Select or Upload Media',
                button: {
                    text: 'Use this media'
                },
                multiple: false  // Set to true to allow multiple files to be selected
            });


            // When an image is selected in the media frame...
            frame.on('select', function () {

                // Get media attachment details from the frame state
                var attachment = frame.state().get('selection').first().toJSON();

                // Send the attachment URL to our custom image input field.
                imgContainer.append('<img src="' + attachment.url + '" alt="" style="max-width:100%;"/>');

                // Send the attachment id to our hidden input
                imgIdInput.value = attachment.id;

                // Hide the add image link
                addImgLink.classList.add('hidden');

                // Unhide the remove image link
                delImgLink.classList.remove('hidden');
            });

            // Finally, open the modal on click
            frame.open();
        })
        delImgLink.addEventListener('click', function (event) {

            event.preventDefault();

            // Clear out the preview image
            imgContainer.innerHTML = '';

            // Un-hide the add image link
            addImgLink.classList.remove('hidden');

            // Hide the delete image link
            delImgLink.classList.add('hidden');
            imgIdInput.value = '';

        });

    }
}
document.addEventListener('DOMContentLoaded', () => {
    admin.customMedia()
})
