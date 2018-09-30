function cargarMaestrosRegistro(){
  cargarComboIdioma('sexos.php', idioma, '#input_sexo');
	cargarComboSinIdioma('localidades.php', '#input_residencia');
	cargarComboSinIdioma('localidades.php', '#input_natal');
	$('#input_residencia').append($("<option></option>").attr("value", 0).text("Otro"));
	$('#input_natal').append($("<option></option>").attr("value", 0).text("Otro"));
}
function inicializarVista(){
	$('#map').show();
	$('#mapa_boton').addClass("activo");
	$('#registro').hide();
	$('#mapa_boton').click(function(){
		ocultarRegistro();
		mostrarMapa();
	});
	$('#registro_boton').click(function(){
		ocultarMapa();
		mostrarRegistro();
		cargarMaestrosRegistro();
	});
  $('.info_boton').click(function(){
    if (ventanaInfoActiva == false){
      mostrarVentanaInfo();
    } else {
      cerrarVentanaInfo();
    }
  });
  $('#cerrar_ventana_info').click(function(){
    cerrarVentanaInfo();
  })
}
