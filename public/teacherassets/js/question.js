function addQuestions() {
    var container = document.getElementById('questionContainer');
    var inputContainer = container.querySelector('.question-inputs');
    var newInput = document.createElement('input');
    newInput.type = 'text';
    newInput.className = 'form-control';
    newInput.name = 'assignment_question[]';
    newInput.placeholder = 'Enter question ' + (inputContainer.children.length + 1);
    inputContainer.appendChild(newInput);
}
