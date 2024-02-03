// admin communication script
window.onload = function() {
    document.querySelectorAll('.chat').forEach(function(box) {
        box.style.display = 'none';
    });
    document.getElementById('defaultMessage').style.display = 'block';
};

function openChat(teacherId) {
    var chatBoxes = document.querySelectorAll('.chat');
    chatBoxes.forEach(function(box) {
        box.style.display = 'none';
    });

    document.getElementById('defaultMessage').style.display = 'none';

    var chatBox = document.getElementById('teacher' + teacherId + 'Chat');
    chatBox.style.display = 'block';

    var chatInput = document.getElementById('chatInput');
    chatInput.style.display = 'flex';
}
