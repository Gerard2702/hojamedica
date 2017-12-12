<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Hoja Medica</title>
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="class/plugins/bootstrap/css/bootstrap.css">
	<!-- MISTYLE -->
	<link rel="stylesheet" href="class/css/style.css">
	<link rel="stylesheet" href="class/css/animate.css">
	<link rel="stylesheet" href="class/plugins/font-awesome/css/font-awesome.min.css">
	<!-- CORE JS 2.4.1 -->
	<script src="class/js/core.js"></script> 
</head>
<body>
	<?php require('nav.php') ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>Hoja de: &nbsp;</strong>
						<label class="custom-control custom-radio">
						  	<input id="radio1" name="radio" type="radio" class="custom-control-input">
						  	<span class="custom-control-indicator"></span>
						  	<span class="custom-control-description">Referencia</span>
						</label>
						<label class="custom-control custom-radio">
						  	<input id="radio2" name="radio" type="radio" class="custom-control-input">
						  	<span class="custom-control-indicator"></span>
						  	<span class="custom-control-description">Retorno</span>
						</label>
					</div>
	  				<div class="card-body">
	    				
	  				</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- BOOTSTRAP DEPENDENCIAS-->
	<script src="class/js/jquery-3.2.1.slim.min.js"></script>
	<script src="class/js/popper.min.js"></script>
	<script src="class/plugins/bootstrap/js/bootstrap.js"></script>
</body>
</html>