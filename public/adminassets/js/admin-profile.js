// Custom JavaScript and jQuery for modal
document.addEventListener('DOMContentLoaded', function () {
    var editProfileBtn = document.getElementById('editProfileBtn');
    var editProfileModal = document.getElementById('editProfileModal');
    var closeModalBtn = editProfileModal.querySelector('#close');

    editProfileBtn.addEventListener('click', function () {
        editProfileModal.style.display = 'block';
    });

    closeModalBtn.addEventListener('click', function () {
        editProfileModal.style.display = 'none';
    });
});
