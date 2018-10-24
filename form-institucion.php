<div id="section11" class="section" data-section="11">
	<div class="main v-center">
		<div class="container">
			<div class="row">				
				<div class="col-sm-4 offset-sm-4">
					
				  <div class="form-group">
				    <label for="institucionNombre">Nombre del espacio, festival, colectivo o institución (*)</label>
				    <input type="text" class="form-control" name="institucionNombre" id="institucionNombre" placeholder="" required data-parsley-required-message="Este campo es obligatorio.">
				  </div>
		
				  <div class="form-group">
				    <label for="institucionEmail">Correo electrónico (*) (**)</label>
				    <input type="email" class="form-control" name="institucionEmail" id="institucionEmail" placeholder="" required data-parsley-required-message="Este campo es obligatorio." data-parsley-type-message="Escriba por favor su correo electrónico de manera correcta.">
				  </div>
		
				  <div class="form-group">
				    <label for="institucionStartYear">Año de fundación</label>
				    <input type="text" class="form-control" name="institucionStartYear" id="institucionStartYear" placeholder="">
				  </div>
		
				  <div class="form-group">
				    <label for="institucionEndYear">Año de clausura</label>
				    <input type="text" class="form-control" name="institucionEndYear" id="institucionEndYear" placeholder="">
				  </div>

				  <div class="form-group">
				    <label for="institucionPaginaWeb">Página web</label>
				    <input type="text" class="form-control" name="institucionPaginaWeb" id="institucionPaginaWeb" placeholder="">
				  </div>

				  <div class="form-group">
				    <label for="institucionTelefono">Teléfono (**)</label>
				    <input type="text" class="form-control" name="institucionTelefono" id="institucionTelefono" placeholder="">
				  </div>

					<p class="small footnote">						
						(*) Campos obligatorios<br/>
						(**) Esta información tiene caracter reservado
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

<div id="section12" class="section" data-section="12">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4 offset-sm-4">
					
					<div class="form-group localidades">
				    <label for="institucionLoc">¿Dónde te ubicas?</label>
						<input type="text" class="form-control typeahead" id="institucionLoc" name="institucionLoc" placeholder="">
			      <div class="coordinates valid-feedback"></div>
						<input id="institucionLocLat" type="hidden" name="institucionLocLat" value="">
						<input id="institucionLocLng" type="hidden" name="institucionLocLng" value="">
					</div>

				</div>
								
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section13" class="section" data-section="13">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<h5>Eventos que has alojado (en caso de espacios), que has promovido (en el caso de instituciones) o en los que has participado (colectivos)</h5>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<select id="institucionEventos" name="institucionEventos[]" class="selectpicker" multiple>
							<?php foreach($festivales as $festival):?>
								<option value="<?php echo $festival->Id;?>"><?php echo $festival->Nombre;?></option>
							<?php endforeach;?>
						</select>
					</div>
					
					<div class="form-group">
				    <label for="institucionEventosOther">Si no aparece en la lista anterior, nombra alguno:</label>
				    <button class="add-new btn btn-outline-secondary" type="button">Añada un evento &nbsp; <span class="oi oi-plus"></span></button>						
					</div>
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section16" class="section" data-section="16">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 offset-sm-3">
					<h5>Selecciona alguno de los siguientes términos para describir tu práctica:</h5>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<select id="institucionEtiquetas" name="institucionEtiquetas[]" class="selectpicker" multiple>
							<?php foreach($etiquetas as $etiqueta):?>
								<option value="<?php echo $etiqueta->Id;?>"><?php echo $etiqueta->Castellano;?></option>
							<?php endforeach;?>
						</select>
					</div>
				
				  <div class="form-group">
				    <label for="institucionEtiquetasOther">¿Algún otro tema que te concierna? Cuéntanos.</label>
				    <textarea class="form-control" id="institucionEtiquetasOther" name="institucionEtiquetasOther" rows="3"></textarea>
				  </div>
				
				</div>
					
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section17" class="section" data-section="17">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 offset-sm-3">

				  <div class="form-group">
				    <label for="suggestedArtists">Para recoger la diversidad del tejido artístico de Navarra, nos sería muy útil que nos sugirieras varios agentes culturales que consideras que deben estar incluidos en este mapeo. (No se publicará. Tiene carácter puramente informativo y a efectos de difusión del proyecto)</label>
				    <textarea class="form-control" id="institucionSuggestions" name="institucionSuggestions" rows="3"></textarea>
				  </div>
				
					<div class="form-group">
								<div class="custom-control custom-checkbox">
								  <input class="custom-control-input" type="checkbox" value="1" name="institucionAcceptTerms" id="institucionAcceptTerms" required data-parsley-required-message="Este campo es obligatorio.">
								  <label class="custom-control-label" for="institucionAcceptTerms">
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

<div id="section18" class="section" data-section="18">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 offset-sm-4">
					<p class="lead">Muchas gracias por tu colaboración. En breve aparecerás en nuestro mapa. Ayúdanos a crecer, no dudes en difundir el proyecto.</p>
				</div>
			</div>
		</div>
	</div>
</div>