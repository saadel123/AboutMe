document.addEventListener('DOMContentLoaded', function () {
    const deleteModal = document.getElementById('deleteModal');
    const deleteForm = document.getElementById('deleteForm');

    if (deleteModal && deleteForm) {
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const url = button.getAttribute('data-url'); // Get delete URL

            if (url) {
                deleteForm.setAttribute('action', url);
            }
        });
    }
});
