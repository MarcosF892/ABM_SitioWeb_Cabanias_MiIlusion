<?php 
include_once "menu2.php";
?>
   <form action="enviarreserva2.php" method="GET">
      <div class="row">
        <div class="col">
         
           <label for="fechaIngreso" class="form-label">Check-In:</label>
            <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" style="width:200px" required>
        </div>

        <div class="col">
           <label for="fechaEgreso" class="form-label">Check-Out:</label>
            <input type="date" class="form-control" id="fechaEgreso" name="fechaEgreso" style="width:200px" required>
        </div>

        <div class="col">
          <label for="cantAdultos" class="form-label">Adultos:</label>
              <select class="form-select" id="cantAdultos" name="cantAdultos" style="width:150px" required>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>5</option>
                  <option>6</option>
              </select>
        </div>
        
        <div class="col">
          <label for="cantMenores" class="form-label">Menores:</label>
              <select class="form-select" id="cantMenores" name="cantMenores" style="width:150px" required>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>5</option>
                  <option>6</option>
              </select>
        </div>
        

        <?php
                if ($usuarioActual == 'Usuario') {
                  $paginaActual = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                  echo '<a href="login2.php?desde=' . $paginaActual . '" class="btn btn-primary mt-3" style=" width:180px; height: 55px;">Consultar disponibilidad</a>';
                } else {
                  echo '<button type="submit" class="btn btn-primary mt-3" style=" width:180px; height: 55px;">Consultar disponibilidad</button>';
                }
        ?>
      </div>
    </form>

<hr class="featurette-divider">

<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  
  <div class="carousel-inner">
    <div class="carousel-item active">
       <div class="card bg-dark text-white m-width-100">
            <div class="row">
                  <div class="col-md-6">
                      <div class="card-body">
                        <h3>Traslasierra</h3>
                          <p class="cam" class="card-text">El Valle de Traslasierra te invita a descubrir lugares de gran belleza y tranquilidad pero también llenos de aventura, perfectos para pasar un verano único. 
                          La región, ubicada al oeste de las Sierras Grandes y al este de las Sierras Occidentales, 
                        se caracteriza por una síntesis magistral entre el paisaje y espíritu serrano. La región es conocida por sus lugares llenos de naturaleza autóctona y 
                        exótica. Tres embalses, un imponente cordón montañoso, volcanes, palmares, bosques y ríos, la convierten en un destino ideal para el descanso y la recreación.</p>
                      </div>
                  </div>
                <div class="col-md-6">
                  <img src="images/paisaje1.jpg" width="100%">
                </div>
            </div>
        </div>
    </div>
  <div class="carousel-item">
      <div class="card bg-dark text-white m-width-100">
            <div class="row">
                  <div class="col-md-6">
                      <div class="card-body">
                        <h3>Mina Clavero</h3>
                          <p class="cam" class="card-text">Durante el verano los ríos de Mina Clavero, declarado una de las siete maravillas naturales de Argentina, y el Panaholma con sus balnearios y paradores, son los más visitados. Este último posee uno de los cursos de agua más cristalinos del Valle de Traslasierra con una extensión de 29 kilómetros. Con aguas tibias se presenta como una opción excelente para disfrutar con los más pequeños de la familia. En el balneario de la comuna de Panaholma pueden encontrarse asadores y sanitarios que complementan la propuesta de servicios de la localidad.</p>
                      </div>
                  </div>
                <div class="col-md-6">
                  <img src="images/mina_clavero.jpg" width="100%">
                </div>
            </div>
        </div>
  </div>
  <div class="carousel-item">
     <div class="card bg-dark text-white m-width-100">
            <div class="row">
                  <div class="col-md-6">
                      <div class="card-body">
                        <h3>Villa Cura Brochero</h3>
                          <p class="cam" class="card-text">Con un río de aguas tibias con propiedades curativas y el legado del santo cordobés como protagonistas, Villa Cura Brochero es una posta tradicional e histórica del Valle de Traslasierra. A orillas del río Panaholma, Villa Cura Brochero  es reconocida por sus paisajes serranos y por haber sido testigo de la obra cristiana del Cura Gaucho, San José Gabriel Brochero, quien vivió allí y llevó su misión evangelizadora a todo el Valle de Traslasierra.</p>
                      </div>
                  </div>
                <div class="col-md-6">
                  <img src="images/Iglesia_editada.jpg" width="100%">
                </div>
            </div>
        </div>
    </div>
  </div>

  
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<hr class="featurette-divider">


<div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading text-info" id="conocenos">Conoce Nuestras Cabañas</h2>
            <p class="lead">Ubicadas en Mina Clavero Cordoba, nuestras cabañas se encuentran equipadas para que pueda venir a descansar y disfrutar tu estadia cerca del complejo tienes muchos lugares para salir a recorrer y conocer.</p>
            <p>Todas las cabañas estan equipadas para (4/6) personas.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto rounded" src="images/principal.jpg" width="500" height="500">
          </div>
</div>

<h2 style="text-align: center;">Galeria</h2>

<div class="row">
  <div class="col-xl-4 col-md-6 p-3">
          <div class="card">
            <img class="img-fluid" src="images/foto2.jpg">
          </div>
  </div>

  <div class="col-xl-4 col-md-6 p-3">
          <div class="card">
            <img class="img-fluid" src="images/foto5.jpg">
          </div>
  </div>

  <div class="col-xl-4 col-md-6 p-3">
          <div class="card">
            <img class="img-fluid" src="images/foto9.jpg">
          </div>
  </div>
  </div>

  <div class="row">
    <div class="col-xl-4 col-md-6 p-3">
          <div class="card">
            <img class="img-fluid" src="images/foto1.jpg">
          </div>
  </div>



   <div class="col-xl-4 col-md-6 p-3">
          <div class="card">
            <img class="img-fluid" src="images/foto4.jpg">
          </div>
  </div>

   <div class="col-xl-4 col-md-6 p-3">
          <div class="card">
            <img class="img-fluid" src="images/foto6.jpg">
          </div>  
  </div>
  </div>

  <hr class="featurette-divider">

  <h2 style="text-align: center;" id="servicio">Servicios</h2>

  <div class="row">
                <div class="col-xl-4 col-md-6 p-3">
                <div class="card" style="width: 18rem;">
                  <img src="images/llave_del_hotel.png" class="card-img-top" alt="llave_del_hotel" style="width: 140px; height: 140px; display: block; margin: 0px auto;">
                  <div class="card-body">
                    <h3>Equipamiento</h3>
                      <p class="card-text">Anafe, vajillas completas, sillas y mesas, heladera con freezer, cama matrimonial, cama cucheta, tv por cable, comoda, ropero, mesa de luz, wifi.</p>
                  </div>
                </div>
                </div>

                <div class="col-xl-4 col-md-6 p-3">
                    <div class="card" style="width: 18rem;">
                  <img src="images/cama.png" class="card-img-top" alt="cama" style="width: 140px; height: 140px; display: block; margin: 0px auto;">
                  <div class="card-body">
                    <h3>Sabanas y toallas</h3>
                      <p class="card-text">Estan incluidas (el recambio esta sujeto a la disponibilidad).</p>
                  </div>
              </div>
                </div>
              
              <div class="col-xl-4 col-md-6 p-3">
                  <div class="card" style="width: 18rem;">
                  <img src="images/wifi.png" class="card-img-top" alt="wifi" style="width: 140px; height: 140px; display: block; margin: 0px auto;">
                  <div class="card-body">
                    <h3>Wifi</h3>
                      <p class="card-text">Sujeto a disponibilidad.</p>
                  </div>
                  </div>  
              </div>   
          </div>

          <div class="row">
            <div class="col-xl-4 col-md-6 p-3">
                <div class="card" style="width: 18rem;">
                  <img src="images/cuarto_de_bano.png" class="card-img-top" alt="cuarto_de_bano" style="width: 140px; height: 140px; display: block; margin: 0px auto;">
                  <div class="card-body">
                    <h3>incluye</h3>
                      <p class="card-text">Jabones, toallas de baño, papel higienico, detergente.</p>
                  </div>
              </div>
                
              </div>
              
              <div class="col-xl-4 col-md-6 p-3">
                <div class="card" style="width: 18rem;">
                  <img src="images/patio.png" class="card-img-top" alt="patio" style="width: 140px; height: 140px; display: block; margin: 0px auto;">
                  <div class="card-body">
                    <h3>Jardin compartido</h3>
                      <p class="card-text">Asadores, estacionamiento cubierto.</p>
                  </div>
              </div>
              </div>

              <div class="col-xl-4 col-md-6 p-3">
                <div class="card" style="width: 18rem;">
                  <img src="images/signo_de_mas.png" class="card-img-top" alt="signo_de_mas" style="width: 140px; height: 140px; display: block; margin: 0px auto;">
                  <div class="card-body">
                    <h3>Accesorios</h3>
                      <p class="card-text">Plancha, pava electrica, microondas.</p>
                  </div>
              </div>
              </div>
          </div>

          <hr class="featurette-divider">

          <h2 style="text-align: center;" id="normas">Normas de convivencia</h2>

          <table class="table table-bordered table-striped my-2">
            <thead class="table-dark">
              <th style="text-align: center;">Lista</th>
            </thead>

            <tbody>
              <tr>
                <td>Los clientes que ingresaron al complejo su horario de salida es a las 10 am y los que ingresaran el horario es a las 12 pm.</td>
              </tr>

              <tr>
                <td>Cada persona que circule fuera de la cabaña debe tener su barbijo puesto.</td>
              </tr>

              <tr>
                <td>No mover los objetos de las cabañas.</td>
              </tr>

              <tr>
                <td>Las personas que se retiren de la cabaña deben dejarla en las mismas condiciones que se la entregaron.</td>
              </tr>
            </tbody>
          </table>
          
          <hr class="featurette-divider">


          <h2 style="text-align: center;" id="contacto">Contactese con nosotros</h2>

          <div class="padre">
            <div class="hijo bg-primary">
              <p class="dat text-white">Correo: miilusion2019@gmail.com | Numero tel/cel: 471514 / 351-6239928 | Direccion: calle Tierra del Fuego 1532. Mina clavero, Cordoba</p>
            </div>
  
          </div>


<?php
  include_once "pie2.php";
 ?>