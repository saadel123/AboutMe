// Custom JavaScript - This script contains my personal custom javascript

//script for TinyMCE editor initialization
document.addEventListener("DOMContentLoaded", function() {
    tinymce.init({
        selector: '.tinymce-editor',
        toolbar_sticky: false,
        setup: function(editor) {
            editor.on('init', function() {
                setTimeout(() => {
                    document.querySelectorAll('.tox-tinymce--toolbar-sticky-on')
                        .forEach(function(el) {
                            el.classList.remove(
                                'tox-tinymce--toolbar-sticky-on');
                            el.style.position = 'relative';
                        });
                }, 1000);
            });
        }
    });
});