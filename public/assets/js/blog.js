function format(command) {
	document.execCommand(command, false, null);
}

function setFontSize(size) {
	document.execCommand("fontSize", false, size);
}

function setColor(color) {
	document.execCommand("foreColor", false, color);
}

document.getElementById('blogForm').addEventListener('submit', function() {
	document.getElementById('content').value = document.getElementById('editor').innerHTML;
});
