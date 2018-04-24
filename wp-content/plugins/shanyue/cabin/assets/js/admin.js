import '../scss/admin.scss'

const admin = {
    sectionPageTypeChange: () => {
        document.getElementById('shanyue_page_sections[type]').addEventListener('change', (event) => {
            if (event.target.value === 'feature') {
                document.querySelector('.icon-class-tr').classList.remove('hidden');
            } else {
                document.querySelector('.icon-class-tr').classList.add('hidden');
            }
        })
    },
    mediaChoose: () => {
        let metaBox = document.querySelector('.shanyue-page-sections')
        if (metaBox) {
            let frame,
                addImgLink = metaBox.querySelector('.upload-custom-img'),
                delImgLink = metaBox.querySelector('.delete-custom-img'),
                imgContainer = metaBox.querySelector('.custom-img-container'),
                imgIdInput = metaBox.querySelector('.custom-img-id');

            // ADD IMAGE LINK
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
                    imgContainer.innerHTML = '<img src="' + attachment.url + '" alt="" style="max-height:150px;"/>';

                    // Send the attachment id to our hidden input
                    imgIdInput.value = attachment.id;

                    // Hide the add image link
                    addImgLink.classList.add('hidden');

                    // Unhide the remove image link
                    delImgLink.classList.remove('hidden');
                });

                // Finally, open the modal on click
                frame.open();
            });


            // DELETE IMAGE LINK
            delImgLink.addEventListener('click', function (event) {

                event.preventDefault();

                // Clear out the preview image
                imgContainer.innerHTML = '';

                // Un-hide the add image link
                addImgLink.classList.remove('hidden');

                // Hide the delete image link
                delImgLink.classList.add('hidden');

                // Delete the image id from the hidden input
                imgIdInput.value = '';
            });
        }


    }
}

document.addEventListener('DOMContentLoaded', () => {
    admin.sectionPageTypeChange();
    admin.mediaChoose();
})