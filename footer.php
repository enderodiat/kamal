	<button class="button-prev v-center-fixed btn btn-light" type="button"><span class="oi oi-arrow-left"></span></button>
	<!--<button class="button-next v-center-fixed btn btn-light" type="button"><span class="oi oi-arrow-right"></span></button>-->


	<script>
		var lugares = <?php echo json_encode($lugares, JSON_UNESCAPED_UNICODE);?>;
		var localidades = <?php echo json_encode($localidades, JSON_UNESCAPED_UNICODE);?>;
	</script>
	
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

	<script src="js/parsley.min.js"></script>

	<script src="js/map-icons.js"></script>

	<script src="js/typeahead.bundle.js"></script>

	<script type="text/javascript" src="js/parametros.js"></script>
	<script type="text/javascript" src="js/_ajax.js"></script>
	<script type="text/javascript" src="js/helper.js"></script>
	<script type="text/javascript" src="js/vista.js"></script>
	<script type="text/javascript" src="js/controller.js"></script>
	<script type="text/javascript" src="js/index.js"></script>

	<script src="js/scripts.js"></script>

	<script src="js/maps.js"></script>

<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0oebl1k1yH3CkxWS0vldSepERG7sFov4&callback=initMap" type="text/javascript"></script>-->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0oebl1k1yH3CkxWS0vldSepERG7sFov4" type="text/javascript"></script>


	</body>
</html>