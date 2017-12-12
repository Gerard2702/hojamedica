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
	<!-- CORE JS 2.4.1 -->
	<script src="class/js/core.js"></script> 
</head>
<body>
	<div class="container">
		<div class="row justify-content-md-center align-items-center">
			<div class="col-md-4">
				<div id="login">
					<div class="card">
					  	<div class="card-header text-center">
					    	<h4><strong>Iniciar Sesión</strong></h4>
					  	</div>
					  	<div class="card-body">
					  		<img class="rounded-circle mx-auto d-block login-img" src="class/img/login.png" alt="login">
					    	<form action="app/login/login.php" method="post">
	  							<div class="form-group">
	    							<label>Usuario</label>
	    							<input type="user" class="form-control" name="usuario" placeholder="Ingrese el usuario" required="">
	  							</div>
	  							<div class="form-group">
	    							<label>Contraseña</label>
	    							<input type="password" class="form-control" name="clave" placeholder="Ingrese la contraseña" required="">
	  							</div>
  								<button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
							</form>
						</div>
					</div>
				</div>
				<div class="alert alert-danger mt-2" role="alert" id="errorlogin">
  					<strong>Error!</strong> Usuario o contraseña incorrectos.
				</div>
			</div>
		</div>
	</div>
	<!-- BOOTSTRAP DEPENDENCIAS-->
	<script src="class/js/jquery-3.2.1.slim.min.js"></script>
	<script src="class/js/popper.min.js"></script>
	<script src="class/plugins/bootstrap/js/bootstrap.js"></script>
	<!-- SCRIPTS -->
	<script src="class/js/index.js"></script>
</body>
</html>