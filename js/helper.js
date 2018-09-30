function ordernarPorIdioma(a, b){
  var aName = a[idioma].toLowerCase();
  var bName = b[idioma].toLowerCase();
  return ((aName < bName) ? -1 : ((aName > bName) ? 1 : 0));
}
function ordernarPorNombre(a, b){
  var aName = a.Nombre.toLowerCase();
  var bName = b.Nombre.toLowerCase();
  return ((aName < bName) ? -1 : ((aName > bName) ? 1 : 0));
}
function cargarComboSinIdioma(php, combo){
	cargarComboIdioma(php, 'Nombre', combo);
}
function cargarComboIdioma(php, valor, combo){
	var opciones = obtener(url + php);
	if (valor == 'Nombre'){
		opciones.sort(ordernarPorNombre);
	} else {
		opciones.sort(ordernarPorIdioma);
	}
	$(combo).empty();
	for (i=0; i<opciones.length; i++){
		var value = opciones[i].Id;
		var texto = opciones[i][valor];
		$(combo).append($("<option></option>").attr("value", value).text(texto));
	}
}
