<div id="section3" class="section" data-section="3">
	<div class="main v-center">
		<div class="container">
			<div class="row">				
				<div class="col-sm-12"><p class="text-right">1 / 7</p></div>

				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
										
				  <div class="form-group">
				    <label for="artistNombre">Nombre y apellidos o nombre artístico (*)</label>
				    <input type="text" class="form-control" name="artistNombre" id="artistNombre" placeholder="" required data-parsley-required-message="Este campo es obligatorio.">
				  </div>
		
				  <div class="form-group">
				    <label for="artistEmail">Correo electrónico (*) (**)</label>
				    <input type="email" class="form-control" name="artistEmail" id="artistEmail" placeholder="" required data-parsley-required-message="Este campo es obligatorio." data-parsley-type-message="Escriba por favor su correo electrónico de manera correcta.">
				  </div>
		
				  <div class="form-group">
				    <label for="artistBirthYear">Año de nacimiento</label>
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

<div id="section4" class="section" data-section="4">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12"><p class="text-right">2 / 7</p></div>
				
				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
					<!--
				  <div class="form-group">
				    <label for="artistBirthLoc">¿De dónde vienes?</label>
				    <select id="artistBirthLoc" name="artistBirthLoc" class="form-control">
				      <option></option>
							<?php// foreach($localidades as $localidad):?>
								<option value="<?php// echo $localidad->Id;?>"><?php// echo $localidad->Nombre;?></option>
								<?php// endforeach;?>
								<option value="other">No aparece en la lista.</option>
				    </select>
				  </div>
				
					<div class="other form-group localidades">
				    <label for="artistBirthPlaceOther">Localidad</label>
						<input type="text" class="form-control typeahead" id="artistBirthLocOther" name="artistBirthLocOther" placeholder="Enter the name of the localidad.">
			      <div class="coordinates valid-feedback"></div>
						<input id="artistBirthLocOtherLat" type="hidden" name="artistBirthLocOtherLat" value="">
						<input id="artistBirthLocOtherLng" type="hidden" name="artistBirthLocOtherLng" value="">
					</div>-->
						
					<div class="form-group localidades">
				    <label for="artistBirthLoc">¿De dónde vienes?</label>
						<input type="text" class="form-control typeahead" id="artistBirthLoc" name="artistBirthLoc" placeholder="">
			      <div class="coordinates valid-feedback"></div>
						<input id="artistBirthLocLat" type="hidden" name="artistBirthLocLat" value="">
						<input id="artistBirthLocLng" type="hidden" name="artistBirthLocLng" value="">
					</div>

				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section5" class="section" data-section="5">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-12"><p class="text-right">3 / 7</p></div>

				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
					<!--
				  <div class="form-group">
				    <label for="artistCurrentLoc">Lugar de residencia habitual</label>
				    <select id="artistCurrentLoc" name="artistCurrentLoc" class="form-control">
				      <option></option>
							<?php// foreach($localidades as $localidad):?>
								<option value="<?php// echo $localidad->Id;?>"><?php// echo $localidad->Nombre;?></option>
							<?php// endforeach;?>
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
					-->
					
					<div class="form-group localidades">
				    <label for="artistCurrentLoc">Lugar de residencia habitual</label>
						<input type="text" class="form-control typeahead" id="artistCurrentLoc" name="artistCurrentLoc" placeholder="">
			      <div class="coordinates valid-feedback"></div>
						<input id="artistCurrentLocLat" type="hidden" name="artistCurrentLocLat" value="">
						<input id="artistCurrentLocLng" type="hidden" name="artistCurrentLocLng" value="">
					</div>
					
						
				</div>
								
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section6" class="section" data-section="6">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-12"><p class="text-right">4 / 7</p></div>

				<div class="col-sm-6 offset-sm-3">
					<h5>¿Qué espacios frecuentas o has frecuentado?</h5>
				</div>				
			</div>
			
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<select id="artistEspacios" name="artistEspacios[]" class="selectpicker" multiple>
							<?php foreach($lugares as $lugar):?>
								<option value="<?php echo $lugar->Id;?>"><?php echo $lugar->Nombre;?></option>
							<?php endforeach;?>
						</select>
					</div>
					
					<div class="form-group">
				    <label for="artistEspaciosOther">Indica en una mapa los espacios si no aparecen en la lista anterior:</label>
				    <button class="add-new btn btn-outline-secondary" type="button">Añada otro espacio &nbsp; <span class="oi oi-plus"></span></button>
						<button class="remove-new btn btn-outline-secondary" type="button" style="display:none;"></button>
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

<div id="section7" class="section" data-section="7">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-12"><p class="text-right">5 / 7</p></div>

				<div class="col-sm-6 offset-sm-3">
					<h5>Eventos en los que has participado</h5>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<select id="artistEventos" name="artistEventos[]" class="selectpicker" multiple>
							<?php foreach($festivales as $festival):?>
								<option value="<?php echo $festival->Id;?>"><?php echo $festival->Nombre;?></option>
							<?php endforeach;?>
						</select>
					</div>
					
					<div class="form-group">
				    <label for="artistEventosOther">Nombra algún evento en el que has participado, si no aparece en la lista anterior:</label>
				    <button class="add-new btn btn-outline-secondary" type="button">Añada un evento &nbsp; <span class="oi oi-plus"></span></button>
						<button class="remove-new btn btn-outline-secondary" type="button" style="display:none;"></button>
					</div>
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section8" class="section" data-section="8">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-12"><p class="text-right">6 / 7</p></div>

				<div class="col-sm-6 offset-sm-3">
					<h5>Selecciona alguno de los siguientes términos para describir tu práctica:</h5>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<select id="artistEtiquetas" name="artistEtiquetas[]" class="selectpicker" multiple>
							<?php foreach($etiquetas as $etiqueta):?>
								<option value="<?php echo $etiqueta->Id;?>"><?php echo $etiqueta->Castellano;?></option>
							<?php endforeach;?>
						</select>
					</div>
				
				  <div class="form-group">
				    <label for="artistEtiquetasOther">¿Algún otro tema que te concierna? Cuéntanos.</label>
				    <textarea class="form-control" id="artistEtiquetasOther" name="artistEtiquetasOther" rows="3"></textarea>
				  </div>
				
				</div>
					
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section9" class="section" data-section="9">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12"><p class="text-right">7 / 7</p></div>

				<div class="col-sm-6 offset-sm-3">

				  <div class="form-group">
				    <label for="suggestedArtists">Para recoger la diversidad del tejido artístico de Navarra, nos sería muy útil que nos sugirieras varios agentes culturales que consideras que deben estar incluidos en este mapeo. (No se publicará. Tiene carácter puramente informativo y a efectos de difusión del proyecto)</label>
				    <textarea class="form-control" id="artistSuggestions" name="artistSuggestions" rows="3"></textarea>
				  </div>
				
					<div class="form-group">
								<div class="custom-control custom-checkbox">
								  <input class="custom-control-input" type="checkbox" value="1" name="artistAcceptTerms" id="artistAcceptTerms" required data-parsley-required-message="Este campo es obligatorio.">
								  <label class="custom-control-label" for="artistAcceptTerms">
								    He leido y acepto la política de protección de datos
								  </label>
								</div>
					</div>				
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next button-submit btn btn-light" type="button">ENVIAR<span class="oi oi-arrow-right"></span></button>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="section10" class="section" data-section="10">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
					<p class="lead">Muchas gracias por tu colaboración. En breve aparecerás en nuestro mapa. Ayúdanos a crecer, no dudes en difundir el proyecto.</p>
						
				</div>
				<div class="col-sm-12 text-center button-container">
					<button class="button-start button-next btn btn-light" type="button"><span class="oi oi-arrow-left"></span>Nuevo formulario</button>
				</div>
				
			</div>
		</div>
	</div>
</div>