document.addEventListener('DOMContentLoaded', function () {
    var editProfileBtn = document.getElementById('editProfileBtn');
    var editProfileModal = document.getElementById('editProfileModal');
    var closeModalBtn = editProfileModal.querySelector('#cross');

    function openEditProfileModal() {
        editProfileModal.style.display = 'block';
        document.body.classList.add('modal-open'); 
    }

    function closeEditProfileModal() {
        editProfileModal.style.display = 'none';
        document.body.classList.remove('modal-open'); 
    }

    closeEditProfileModal();
    editProfileBtn.addEventListener('click', openEditProfileModal);
    closeModalBtn.addEventListener('click', closeEditProfileModal);
});