<?php include_once('header.php');?>

<div class="nav-container">
	<button id="map_button" class="btn btn-light img"><img src="img/kamal_square_letters.png" height="120"></button>
	<button id="form_button" class="btn btn-outline-dark img"><img src="img/timon_square_letters_white.png" height="120"></button>
	<div class="nav-inner-container">
		<button id="info_button" data-toggle="modal" style="margin-left:auto; margin-right:auto; display:block;" class="btn btn-outline-dark" data-target="#infoModal">ACERCA DE</button>
		<button id="es_button" style="float:left; display:block;" class="btn btn-outline-dark"><span style="border-bottom:1px solid #fff;">ES</span></button>
		<button id="es_button" style="float:right; display:block;" class="btn btn-outline-dark">EN</button>
		<button id="es_button" style="margin-left:auto; margin-right:auto; clear:both; display:block;" class="btn btn-outline-dark">EU</button>
	</div>
</div>

<div id="map" class="page active"></div>
<div id="form" class="page">
	<?php include_once('form.php');?>
</div>

<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
			<h5>KAMAL</h5>

			<p>“Kamal” es un término árabe que significa equilibrio. Así se denominaba también a un antiguo instrumento cartográfico, que guiaba a los navegantes en latitudes ecuatoriales, tomando como referente la altura de la estrella polar.</p>

			<p>Como el “Kamal”, este proyecto de mapeo, trata de dar una orientación sobre el panorama artístico navarro y sus agentes culturales. De ofrecer una vista panorámica a un territorio vasto y diverso, siguiendo diversos criterios: geográficos, cronológicos, sociales, locales.... Hemos hecho especial hincapié en el mundo de las escenas, a veces efímeras, y en todo caso, difíciles de documentar, que marcan este paisaje y los hilos que las entrelazan.</p>

			<p>Nos interesa abarcar eventos situados en un periodo amplio en el tiempo, tomando como eje inicial los Encuentros de 1972. Queremos reflexionar sobre cuestiones tales como: ¿qué bailarinas tienen una práctica política?, ¿qué relación existe entre la escena rock y la escena punk navarras?, ¿qué proyectos de comisariado originados en Navarra se desarrollan en el extranjero?, ¿qué cineastas tratan temas de género? o ¿cuántos espacios artísticos fueron clausurados durante la crisis económica del 2008 ?</p>

			<p>Además, hemos querido preservar la libertad de quien participe de autodefinirse. Por eso, “Kamal” trata de evitar el encasillamiento dentro de una disciplina artística, o dentro de una sola tendencia, permitiéndonos optar por definiciones polisémicas: azar, naturaleza, efímero, político, queer...</p>

			<p>Queremos crear un referente para la investigación que se auto-transforma en el tiempo, y en función de la intervención libre de quien participe, para documentar así la heterogeneidad y el cambio del tejido artístico contemporáneo navarro. Queremos rehuir las clasificaciones arbitrarias, los clichés y los estereotipos, y plantear de este modo una manera diferente de trazar mapas. “Kamal” será nuestro mapa, creado y transformado colectivamente.</p>

			<h5>PARTICIPACIÓN</h5>

			<p>Si eres un agente cultural con relación con Navarra, puedes participar rellenando el formulario que aparece en el botón “PARTICIPA”.


			<h5>AUTORES</h5>

			<p>Paula Carralero (<a href="http://paulacarralero.com" target="_blank">paulacarralero.com</a>)<br/>
			Max Stein (<a href="http://maxstein.net" target="_blank">maxstein.net</a>)<br/>
			Federico Foderaro (<a href="http://federicofoderaro.com" target="_blank">federicofoderaro.com</a>)</p>

			<h5>LICENCIA</h5>

			<p><a rel="license" href="https://creativecommons.org/licenses/by/4.0/deed.es" target="_blank"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a></p><p>Este proyecto está bajo una <a rel="license" href="https://creativecommons.org/licenses/by/4.0/deed.es" target="_blank">licencia de Creative Commons Reconocimiento 4.0 Internacional</a>.</p>
						
		</div>
	</div>
</div>


<!--<button class="boton_siguiente_lg recuadro clickeable" id="boton_siguiente"><h1>SIGUIENTE</h1></button>-->
<?php include_once('footer.php');?>