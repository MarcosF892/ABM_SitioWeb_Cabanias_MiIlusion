<?php
  session_start();
  $mysqli = include_once "conexion2.php";

  setlocale(LC_ALL,"es_ES");
  date_default_timezone_set("America/Argentina/Cordoba");

  if (isset($_SESSION['usuario'])) {
    $usuarioActual = $_SESSION['usuario'];
  } else {
    $usuarioActual = 'Usuario';
  }
  #$resultado = $mysqli->query('SELECT * FROM Categorias');
  #$categorias = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es" style="position:relative; min-height:100%;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cabañas Mi Ilusion</title>
  <link rel="icon" type="image/x-icon" href="images/home.ico">
  <link rel="stylesheet" type="text/css" href="mis_estilos/estilo1.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<!--class="d-flex flex-column min-vh-100" style="background-image: url('img/fondo.jpg'); width: 1349px; height: 513px; "-->
<body>
  <!--va en el header background-image:url('img/camara.png');-->
  <header class="text-white p-3" style="height: 598px; background-image:url('images/principal.jpg');background-size:cover;background-repeat:no-repeat;">
  </header>
  <nav style="background-color: #7C7A53;" class="navbar navbar-expand-sm sticky-top navbar-dark mb-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="inicio2.php">Inicio</a> <!--crear inicio2.php-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link" href="#conocenos">Galeria de imagenes</a> <!--Crear para mostrar fotos de cabanias cabanias.php-->
            </li>

             <li class="nav-item">
              <a class="nav-link" href="#servicio">Servicios</a> <!--Crear para mostrar fotos de cabanias cabanias.php-->
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#normas">Normas de convivencia</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#contacto">Contactos</a>
            </li>

        
            <?php
            if ($usuarioActual!='Usuario') {
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="cabanias.php">Cabañas</a>';
              echo '</li>';
            }
            ?>

          </ul>

          <ul class="nav navbar-nav ms-auto">

          <li class="nav-item dropdown dropstart">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#"><?php echo $usuarioActual; ?></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo 'login2.php';?>">Registro / Login</a></li>
              <li><a class="dropdown-item" href="<?php echo 'logout2.php';?>">Logout</a></li> <!--crear logout2.php-->
            </ul>
          </li>
        </ul>

        </div>
      
      </div>
    
  </nav>

<div class="container">


