<?php 
include_once "menu2.php";

echo '<div class="row"><div class="col-12">';
echo '<h3 class="pt-3" style="color:teal; border:1px solid teal; border-style:none none solid none">Consultas de cabañas</h3>';
echo '</div></div>';

if (isset($_GET['reservarcabania'])) { 
echo <<<'HTML'
  <div class="alert alert-info p-2 mt-3">
      Gracias por su consulta pronto nos comunicaremos con usted

    </div>
HTML;
  //echo '<div class="alert alert-success p-2 mt-3">Su reserva ha sido realizada con éxito.</div>';
}



 ?>

<?php include_once "pie2.php"; ?>