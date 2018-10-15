<?php include("header.php");?>

<div class="pantalla active" data-pantalla="1">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
				</div>

				<div class="col-sm-4 offset-sm-2">
					<p class="lead">
						Kamal es un proyecto en proceso para mapear el tejido artístico navarro.<br/>
						Es necesaria tu aportación para visibilizar la pluralidad de agentes que lo constituyen.<br/>
						La información que nos quieras dar servirá para trazar los diferen- tes tipos de mapas que aparecen en la página de inicio.
					</p>
				</div>

				<div class="col-sm-2 offset-sm-2 text-right">
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">COMIENZO<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="pantalla" data-pantalla="2">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-4 offset-sm-4">
					<div class="custom-control custom-radio">
					  <input type="radio" id="typeAgenteCultural" name="userType" value="agentCultural" class="custom-control-input">
					  <label class="custom-control-label" for="typeAgenteCultural"><span>Soy un/a agente cultural (*)</span></label>
					</div>
					<div class="custom-control custom-radio">
					  <input type="radio" id="typeInstitucion" name="userType" value="institucion" class="custom-control-input">
					  <label class="custom-control-label" for="typeInstitucion"><span>Somos varios/as: espacio, institución, festival, colectivo...</span></label>
					</div>
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

<div class="pantalla" data-pantalla="3">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4 offset-sm-4">

				  <div class="form-group">
				    <label for="artistNombre">Nombre y apellidos o nombre artístico (*)</label>
				    <input type="text" class="form-control" name="artistNombre" id="artistNombre" placeholder="">
				  </div>
					
				  <div class="form-group">
				    <label for="artistEmail">Correo electrónico (*) (**)</label>
				    <input type="email" class="form-control" name="artistEmail" id="artistEmail" placeholder="">
				  </div>
					
				  <div class="form-group">
				    <label for="artistBirthYear">Año de nacimiento.</label>
				    <input type="text" class="form-control" name="artistBirthYear" id="artistBirthYear" placeholder="">
				  </div>
					
				  <div class="form-group">
				    <label for="artistDeathYear">Año de defunción</label>
				    <input type="text" class="form-control" name="artistDeathYear" id="artistDeathYear" placeholder="">
				  </div>

				  <div class="form-group">
				    <label for="artistGenero">Género</label>
				    <select class="form-control" name="artistGenero" id="artistGenero">
				      <option></option>
							<?php foreach($sexos as $sexo):?>
								<option value="<?php echo $sexo->Id;?>"><?php echo $sexo->Castellano;?></option>
							<?php endforeach;?>
				    </select>
				  </div>
					
				  <div class="form-group">
				    <label for="artistPaginaWeb">Página web.</label>
				    <input type="text" class="form-control" name="artistPaginaWeb" id="artistPaginaWeb" placeholder="">
				  </div>

					<p class="small footnote">
						(*) Campos obligatorios<br/>
						(**) Esta información tiene caracter reservado<br/>
						a efectos de modificación de datos personales. No será publicada.
					</p>
				</div>
								
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!--
<div class="pantalla" data-pantalla="4">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
				</div>
				
					<div class="form-group">
				    <label for="exampleFormControlInput1">¿De dónde vienes?</label>
							<div class="input-group">
								<input id="localidades" type="text" class="form-control typeahead" id="exampleFormControlInput1" placeholder="Enter your birthplace.">
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" type="button"><span class="oi oi-chevron-right"></span></button>
						  </div>
						</div>
					</div>				
				</div>
				
				<div class="col-sm-2 offset-sm-2 text-right">
				</div>
				
				<div class="offset-sm-2 col-sm-8">
					<div id="map"></div>
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
									
			</div>
		</div>
	</div>
</div>
-->
<!--
<div class="pantalla" data-pantalla="4">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
				</div>
				
				<div class="col-sm-4 offset-sm-2">
					
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">¿De dónde vienes?</label>
				    <select class="form-control" id="exampleFormControlSelect1">
				      <option></option>
							<?php// foreach($localidades as $localidad):?>
								<option value="<?php// echo $localidad->Id;?>"><?php// echo $localidad->Nombre;?></option>
							<?php// endforeach;?>
								<option>No aparece en la lista.</option>
				    </select>
				  </div>
					
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Location name</label>
				    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
				  </div>
								
				</div>
				
				<div class="col-sm-2 offset-sm-2 text-right">
				</div>
				
				<div class="offset-sm-2 col-sm-8">						
					<div id="map"></div>
				</div>
				
			</div>
		</div>
	</div>
</div>-->

<div id="pantalla4" class="pantalla" data-pantalla="4">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4 offset-sm-4">
					
				  <div class="form-group">
				    <label for="artistBirthLoc">¿De dónde vienes?</label>
				    <select id="artistBirthLoc" name="artistBirthLoc" class="form-control">
				      <option></option>
							<?php foreach($localidades as $localidad):?>
								<option value="<?php echo $localidad->Id;?>"><?php echo $localidad->Nombre;?></option>
							<?php endforeach;?>
								<option value="other">No aparece en la lista.</option>
				    </select>
				  </div>
				
					<div class="other form-group localidades">
				    <label for="artistBirthPlaceOther">Localidad</label>
						<input type="text" class="form-control typeahead" id="artistBirthLocOther" name="artistBirthLocOther" placeholder="Enter the name of the localidad.">
			      <div class="coordinates valid-feedback"></div>
						<input id="artistBirthLocOtherLat" type="hidden" name="artistBirthLocOtherLat" value="">
						<input id="artistBirthLocOtherLng" type="hidden" name="artistBirthLocOtherLng" value="">
					</div>
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="pantalla5" class="pantalla" data-pantalla="5">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4 offset-sm-4">
					
				  <div class="form-group">
				    <label for="artistCurrentLoc">Lugar de residencia habitual</label>
				    <select id="artistCurrentLoc" name="artistCurrentLoc" class="form-control">
				      <option></option>
							<?php foreach($localidades as $localidad):?>
								<option value="<?php echo $localidad->Id;?>"><?php echo $localidad->Nombre;?></option>
							<?php endforeach;?>
								<option value="other">No aparece en la lista.</option>
				    </select>
				  </div>
				
					<div class="other form-group localidades">
				    <label for="artistCurrentLocOther">Localidad</label>
						<input type="text" class="form-control typeahead" id="artistCurrentLocOther" name="artistCurrentLocOther" placeholder="Enter the name of the localidad.">
			      <div class="coordinates valid-feedback"></div>
						<input id="artistCurrentLocOtherLat" type="hidden" name="artistCurrentLocOtherLat" value="">
						<input id="artistCurrentLocOtherLng" type="hidden" name="artistCurrentLocOtherLng" value="">
					</div>						
					
				</div>
								
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!--
<div id="pantalla6" class="pantalla" data-pantalla="6">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 offset-sm-3">
					<h5>¿Qué espacios frecuentas o has frecuentado?</h5>
					<h4 class="small">Indica en este mapa los espacios si no aparecen en la lista anterior:<br/>(Si no existe una ubicación exacta, puedes señalar una latitud aproximada)</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 offset-sm-1 checkbox-container">
					<?php// foreach($lugares as $lugar):?>
						<div class="custom-control custom-checkbox">
						  <input class="custom-control-input" type="checkbox" name="artistEspacios" value="<?php// echo $lugar->Id;?>" id="lugar<?php// echo $lugar->Id;?>">
						  <label class="custom-control-label" for="lugar<?php// echo $lugar->Id;?>">
						    <?php// echo $lugar->Nombre;?>
						  </label>
						</div>
					<?php// endforeach;?>
				</div>
				
				<div class="col-sm-6">
					<div id="map1"></div>
				</div>
				
				<div class="col-sm-3">
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>-->

<div id="pantalla6" class="pantalla" data-pantalla="6">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 offset-sm-3">
					<h5>¿Qué espacios frecuentas o has frecuentado?</h5>
				</div>
				
				<div class="col-sm-2 text-right">
				</div>

				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<select id="artistEspacios" name="artistEspacios" class="selectpicker" multiple data-live-search="true" data-selected-text-format="count">
							<?php foreach($lugares as $lugar):?>
								<option value="<?php echo $lugar->Id;?>"><?php echo $lugar->Nombre;?></option>
							<?php endforeach;?>
						</select>
					</div>
					
					<div class="form-group">
				    <label for="artistEspaciosOther">Indica en una mapa los espacios si no aparecen en la lista anterior:</label>
				    <button class="add-new btn btn-outline-secondary" type="button">Añada otro espacio &nbsp; <span class="oi oi-plus"></span></button>						
					</div>

				</div>
				
				<div class="offset-sm-2 col-sm-8">						
					<div id="map1" style="display:none;"></div>
				</div>
				
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="pantalla7" class="pantalla" data-pantalla="7">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 offset-sm-3">
					<h5>Eventos en los que has participado</h5>
				</div>
				
				<div class="col-sm-2 text-right">
				</div>

				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<select id="artistEventos" name="artistEventos" class="selectpicker" multiple data-live-search="true" data-selected-text-format="count">
							<?php foreach($festivales as $festival):?>
								<option value="<?php echo $festival->Id;?>"><?php echo $festival->Nombre;?></option>
							<?php endforeach;?>
						</select>
					</div>
					
					<div class="form-group">
				    <label for="artistEventosOther">Nombra algún evento en el que has participado, si no aparece en la lista anterior:</label>
				    <button class="add-new btn btn-outline-secondary" type="button">Add an event &nbsp; <span class="oi oi-plus"></span></button>						
					</div>
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="pantalla8" class="pantalla" data-pantalla="8">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 offset-sm-3">
					<h5>Selecciona alguno de los siguientes términos para describir tu práctica:</h5>
				</div>
				
				<div class="col-sm-2 text-right">
				</div>

				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<select id="artistEtiquetas" name="artistEtiquetas" class="selectpicker" multiple data-live-search="true" data-selected-text-format="count">
							<?php foreach($etiquetas as $etiqueta):?>
								<option value="<?php echo $etiqueta->Id;?>"><?php echo $etiqueta->Castellano;?></option>
							<?php endforeach;?>
						</select>
					</div>
				
				  <div class="form-group">
				    <label for="artistEtiquetasOther">¿Algún otro tema que te concierna? Cuéntanos.</label>
				    <textarea class="form-control" id="artistEtiquetasOther" rows="3"></textarea>
				  </div>
				
				</div>
					
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="pantalla9" class="pantalla" data-pantalla="9">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 offset-sm-3">
				
				  <div class="form-group">
				    <label for="suggestedArtists">Para recoger la diversidad del tejido artístico de Navarra, nos sería muy útil que nos sugirieras varios agentes culturales que consideras que deben estar incluidos en este mapeo. (No se publicará. Tiene carácter puramente informativo y a efectos de difusión del proyecto)</label>
				    <textarea class="form-control" id="artistSuggestions" name="artistSuggestions" rows="3"></textarea>
				  </div>
				
					<div class="form-group">
								<div class="custom-control custom-checkbox">
								  <input class="custom-control-input" type="checkbox" value="1" name="artistAcceptTerms" id="artistAcceptTerms">
								  <label class="custom-control-label" for="accept-terms">
								    He leido y acepto la política de protección de datos
								  </label>
								</div>
						
						
					</div>
				
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">ENVIAR<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="pantalla10" class="pantalla" data-pantalla="10">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
				</div>

				<div class="col-sm-4 offset-sm-2">
					<p class="lead">Muchas gracias por tu colaboración. En breve aparecerás en nuestro mapa. Ayúdanos a crecer, no dudes en difundir el proyecto.</p>
				</div>

				<div class="col-sm-2 offset-sm-2 text-right">
				</div>
				
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>