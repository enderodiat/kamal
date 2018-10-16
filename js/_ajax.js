function obtener(url) {
	var ajax = new XMLHttpRequest();
	ajax.open('GET', url, false);
	ajax.send();
	return JSON.parse(ajax.responseText);
}