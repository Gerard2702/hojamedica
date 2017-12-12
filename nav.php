<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="home.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="new.php">Nueva</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Historial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Estadisticas</a>
          </li>
      </ul>
      <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle login-img-nav" src="class/img/login.png" alt=""><?php echo $_SESSION['name']; ?> 
            </a>
            <div class="dropdown-menu dropdown-menu-right animated fadeInLeft" aria-labelledby="navbarDropdown">
                <a class="dropdown-item " href="app/login/logout.php"><i class="fa fa-sign-out"></i> Salir</a>
            </div>
          </li>
      </ul>
    </div>
  </div>
</nav>