function mostrarMapa(){
	$('#map').show();
	$('#mapa_boton').addClass("activo");
	$('.info_boton_lg').show();
}
function ocultarMapa(){
	$('#map').hide();
	$('#mapa_boton').removeClass("activo");
	$('.info_boton_lg').hide();
}
function mostrarRegistro(){
	$('#registro').show();
	$('#registro_boton').addClass("activo");
	$('.boton_siguiente_lg').show();
}
function ocultarRegistro(){
	$('#registro').hide();
	$('#registro_boton').removeClass("activo");
	$('.boton_siguiente_lg').hide();
}
function mostrarVentanaInfo(){
	$('#ventana_info').show();
	ventanaInfoActiva = true;
}
function cerrarVentanaInfo(){
	$('#ventana_info').hide();
	ventanaInfoActiva = false;
}
