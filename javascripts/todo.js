counter = 1;

document.getElementById('test-entry').onclick = function() {

	inputText = "Task " + counter + ": ";
	tempText = document.getElementById('test-input').value;
	inputText += tempText;
	

	newElement = document.createElement('li');

	newElement.setAttribute('id', counter);
	
	myText = document.createTextNode(inputText);
	myElement = document.getElementById('test-output');
	
	myElement.appendChild(newElement);
	newElement.appendChild(myText);
	

	
	counter++;
};

document.getElementById('delete-entry').onclick = function() {
	
	taskNum = document.getElementById('delete-task').value;
	myElement = document.getElementById(taskNum);
	
	myElement.parentNode.removeChild(myElement);
}