window.onload = function() {
	submitMsg.onclick = function(e) {
		var message = msg.value;
		var elLi = document.createElement('li');
		elLi.innerText = message;
		messages.appendChild(elLi);
	}
};