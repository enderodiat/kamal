<div id="section3" class="section" data-section="3">
	<div class="main v-center">
		<div class="container">
			<div class="row">				
				<div class="col-sm-12"><p class="page-marker">1 / 8</p></div>

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
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
			</div>
		</div>
	</div>
</div>

<div id="section4" class="section" data-section="4">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12"><p class="page-marker">2 / 8</p></div>
				
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
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section5" class="section" data-section="5">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-12"><p class="page-marker">3 / 8</p></div>

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
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section6" class="section" data-section="6">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-12"><p class="page-marker">4 / 8</p></div>

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
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section7" class="section" data-section="7">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-12"><p class="page-marker">5 / 8</p></div>

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
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section8" class="section" data-section="8">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-12"><p class="page-marker">6 / 8</p></div>

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
					<button class="button-next btn btn-light" type="button"><img src="img/siguiente.png" width="100"></button>
					<button class="mobile button-prev btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
					<!--<button class="button-next btn btn-light" type="button">SIGUIENTE<span class="oi oi-arrow-right"></span></button>-->
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="section9" class="section" data-section="9">
	<div class="main v-center">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12"><p class="page-marker">7 / 8</p></div>

				<div class="col-sm-6 offset-sm-3">

				  <div class="form-group">
				    <label for="suggestedArtists">Para recoger la diversidad del tejido artístico de Navarra, nos sería muy útil que nos sugirieras varios agentes culturales que consideras que deben estar incluidos en este mapeo. (No se publicará. Tiene carácter puramente informativo y a efectos de difusión del proyecto)</label>
				    <textarea class="form-control" id="artistSuggestions" name="artistSuggestions" rows="3"></textarea>
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

<div id="section10" class="section" data-section="10">
	<div class="main v-center">
		<div class="container">
			<div class="row">

				<div class="col-sm-12"><p class="page-marker">8 / 8</p></div>

				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3">
					<p class="lead"><strong>Información sobre protección de datos encuestados</strong></p>
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
						  <input class="custom-control-input acceptTerms" type="checkbox" value="1" name="artistAcceptTerms" id="artistAcceptTerms" required data-parsley-required-message="Este campo es obligatorio.">
						  <label class="custom-control-label" for="artistAcceptTerms">
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

<div id="section11" class="section" data-section="11">
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