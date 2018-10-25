<?php include_once("header.php");?>
<form id="userData" name="userData">

<div id="section0" class="section active" data-section="0">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 small">
					<p class="lead"><strong>Información básica sobre Protección de Datos Responsable:</strong> Centro Huarte de Arte Contemporáneo</p>
					<p>&nbsp;</p>
					<p><strong>Finalidad:</strong> Gestionar el envío de boletines por correo electrónico con información gratuita y sin publicidad, relacionada con los temas que se tratan en mi la web <a href="http://centrohuarte.es" target="_blank">centrohuarte.es</a>.</p>
					<p><strong>Legitimación:</strong> Consentimiento del interesado</p>
					<p><strong>Destinatarios:</strong> Se comunicarán datos a MailChimp para gestionar las suscripciones a la lista de correo como plataforma de envío de boletines por correo electrónico.</p>
					<p><strong>Derechos:</strong> Tiene derecho a Acceder, rectificar y suprimir los datos, así como otros derechos, como se explica en la información adicional.</p>
					<p><strong>Plazo de conservación de los datos:</strong> Hasta que no se solicite su supresión por el interesado.</p>
					<p><strong>Información adicional:</strong> Puede consultar la información adicional y detallada sobre Protección de Datos Personales en la página web <a href="http://centrohuarte.es" target="_blank">centrohuarte.es</a></p>						
					
					<p>&nbsp;</p>
				
					<div class="form-group">
						<div class="custom-control custom-checkbox">
						  <input class="custom-control-input" type="checkbox" value="1" name="acceptPrivacy" id="acceptPrivacy" required data-parsley-required-message="Este campo es obligatorio.">
						  <label class="custom-control-label" for="acceptPrivacy">
						    He leído y acepto la política de privacidad
						  </label>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section1" class="section" data-section="1">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
					<p class="lead">Kamal es un proyecto en proceso para mapear el tejido artístico navarro.</p>
					<p class="lead">Es necesaria tu aportación para visibilizar la pluralidad de agentes que lo constituyen.</p>
					<p class="lead">La información que nos quieras dar servirá para trazar los diferentes tipos de mapas que aparecen en la página de inicio.</p>
					</p>
				</div>

				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">COMIENZO<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section2" class="section" data-section="2">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div id="userType" class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
					<div class="custom-control custom-radio">
					  <input type="radio" id="typeAgenteCultural" name="userType" value="agentCultural" class="custom-control-input" data-parsley-errors-container="#userTypeError" data-parsley-class-handler="#userType" required data-parsley-required-message="Este campo es obligatorio.">
					  <label class="custom-control-label" for="typeAgenteCultural"><span>Soy un/a agente cultural (*)</span></label>
					</div>
					<div class="custom-control custom-radio">
					  <input type="radio" id="typeInstitucion" name="userType" value="institucion" class="custom-control-input" data-parsley-errors-container="#userTypeError" required>
					  <label class="custom-control-label" for="typeInstitucion"><span>Somos un espacio, institución, festival, colectivo...</span></label>						
					</div>
					<div id="userTypeError"></div>
				</div>
				
				<div class="col-sm-8 offset-sm-2">
					<p class="small footnote">(*) <strong>Agente cultural</strong>: toda persona o grupo que realiza labores relacionadas con la cultura (creadores, gestores, investigadores, productores, formadores, difusores, intérpretes, etc).</p>
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("form-artist.php");?>

<?php include("form-institucion.php");?>

</form>

<?php include_once('footer.php');?>