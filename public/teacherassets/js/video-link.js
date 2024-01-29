function addVideoLink() {
    var container = document.getElementById('videoLinksContainer');
    var inputContainer = container.querySelector('.video-link-inputs');
    var newInput = document.createElement('input');
    newInput.type = 'text';
    newInput.className = 'form-control';
    newInput.name = 'videos[]';
    newInput.placeholder = 'Enter video link ' + (inputContainer.children.length + 1);
    inputContainer.appendChild(newInput);
}
