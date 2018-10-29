<div id="section12" class="section" data-section="12">
	<div class="main v-center">
		<div class="container">
			<div class="row">				
				<div class="col-sm-12"><p class="page-marker">1 / 6</p></div>

				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
					
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
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
			</div>
		</div>
	</div>
</div>

<div id="section13" class="section" data-section="13">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12"><p class="page-marker">2 / 6</p></div>
				
				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
					
					<div class="form-group localidades">
				    <label for="institucionLoc">¿Dónde te ubicas?</label>
						<input type="text" class="form-control typeahead" id="institucionLoc" name="institucionLoc" placeholder="">
			      <div class="coordinates valid-feedback"></div>
						<input id="institucionLocLat" type="hidden" name="institucionLocLat" value="">
						<input id="institucionLocLng" type="hidden" name="institucionLocLng" value="">
					</div>

				</div>
								
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section14" class="section" data-section="14">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12"><p class="page-marker">3 / 6</p></div>

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
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section16" class="section" data-section="16">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12"><p class="page-marker">4 / 6</p></div>
				
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
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section17" class="section" data-section="17">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12"><p class="page-marker">5 / 6</p></div>

				<div class="col-sm-6 offset-sm-3">

				  <div class="form-group">
				    <label for="suggestedArtists">Para recoger la diversidad del tejido artístico de Navarra, nos sería muy útil que nos sugirieras varios agentes culturales que consideras que deben estar incluidos en este mapeo. (No se publicará. Tiene carácter puramente informativo y a efectos de difusión del proyecto)</label>
				    <textarea class="form-control" id="institucionSuggestions" name="institucionSuggestions" rows="3"></textarea>
				  </div>				
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
			</div>
		</div>
	</div>
</div>

<div id="section18" class="section" data-section="18">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-12"><p class="page-marker">6 / 6</p></div>

				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3">
					<p class="lead"><strong>Información básica sobre Protección de Datos Responsable:</strong> Centro Huarte de Arte Contemporáneo</p>
					<p>&nbsp;</p>

					<div class="privacy">
						<p><strong>Responsable:</strong> Centro Huarte de Arte Contemporáneo, Calle Calvario, 2, C.p. 31620 Huarte (Navarra) - CIF G31876105- <a href="http://www.centrohuarte.es" target="_blank">www.centrohuarte.es</a></p>
						<p><strong>Finalidades de tratamiento:</strong> Gestión de las consultas y estudios realizadas desde la AEPD con objeto de verificar y promover el conocimiento y cumplimiento de la normativa de protección de datos y de aquella cuya supervisión tiene atribuida a la AEPD.
						Base legitimadora: El tratamiento se basará en el consentimiento expreso del artista al cumplimentar y enviarnos su encuesta, otorgándonos de este modo el consentimiento para el tratamiento y publicación de sus datos personales.
						Periodo de conservación: Tus datos personales serán tratados por Centro Huarte de Arte Contemporáneo mientras no ejerzas tu derecho de oposición o supresión.</p>

						<p><strong>Destinatarios:</strong>
						<ol>
						<li>Se comunicarán datos a terceros encargados de tratamiento y a terceros con la finalidad de dar cumplimiento a la relación contractual. La Organización dispone de los correspondientes contratos de encargo de tratamiento suscrito entre ambas partes que recoge las debidas garantías en cuanto al tratamiento de los datos de carácter personal, la confidencialidad y la cancelación, destrucción o devolución.</li>
						<li>Cuando exista una obligación o requerimiento legal que así lo exija (Hacienda, Inspección de Trabajo, Juzgados y Tribunales, Policía, etc.)</li>
						<li>Se publicarán los datos del artista en la página web del Centro Huarte de Arte Contemporáneo, siendo accesibles a todo aquel usuario de la web que los quiera consultar.</li>
						</ol>
						</p>

						<p><strong>Transferencias Internacionales:</strong> No se prevén transferencias de datos personales fuera del Espacio Económico Europeo
						Derechos RGPD: Puedes ejercer tus derechos de acceso, supresión y limitación comunicándolo por correo electrónico remitido a la dirección <a href="mailto:administracion@centrohuarte.es" target="_blank">administracion@centrohuarte.es</a><br/>
						o cumplimentando los formularios disponibles a tal efecto en nuestros establecimientos adjuntando en todo caso una fotocopia de DNI o documento identificativo equivalente con el fin de confirmar debidamente su identidad</p>

						<p><strong>Información adicional:</strong> Puedes consultar la información adicional sobre el tratamiento de datos solicitándola a través del correo <a href="mailto:administracion@centrohuarte.es" target="_blank">administracion@centrohuarte.es</a></p>					
					</div>

					<p>&nbsp;</p>
				
					<div class="form-group">
						<div class="custom-control custom-checkbox">
						  <input class="custom-control-input acceptTerms" type="checkbox" value="1" name="institucionAcceptTerms" id="institucionAcceptTerms" required data-parsley-required-message="Este campo es obligatorio.">
						  <label class="custom-control-label" for="institucionAcceptTerms">
						    He leido y acepto <a href="#privacyModal" data-toggle="modal">la política de protección de datos</a>
						  </label>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 text-center button-container">
					<button class="button-next button-submit btn btn-light" type="button"><img src="img/enviar-sq.png" width="150"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next button-submit btn btn-light" type="button">ENVIAR<span class="oi oi-arrow-right"></span></button>-->
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section19" class="section" data-section="19">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
					<p class="lead">Muchas gracias por tu colaboración. En breve aparecerás en nuestro mapa. Ayúdanos a crecer, no dudes en difundir el proyecto.</p>
				</div>
				<div class="col-sm-12 text-center button-container">
					<!--<button class="button-start button-next btn btn-light" type="button"><span class="oi oi-arrow-left"></span>Nuevo formulario</button>-->
					<button class="button-start button-next btn btn-light" type="button"><img src="img/nuevo.png" width="150"></button>
				</div>
			</div>
		</div>
	</div>
</div>