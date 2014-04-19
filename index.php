<?php include "php/conexion.inc" ?>
<?php include "includes/cabecera.inc" ?>
<?php include "includes/nav.inc" ?>

<?php 

if(isset($_GET['pag'])){

  if($_GET['pag'] == "inicio.inc" || $_GET['pag'] == "aventura.inc" || $_GET['pag'] == "vive.inc" || $_GET['pag'] == "conoce.inc" || $_GET['pag'] == "divierte.inc"){
    $url = $_GET['pag'];
  }else{
    $url = "inicio.inc";
  }

  
}else{
  $url = "inicio.inc";
}



include "includes/".$url; 

?>
<?php include "includes/footer.inc" ?>
