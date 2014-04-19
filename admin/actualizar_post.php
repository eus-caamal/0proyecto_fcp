
<?php include "../php/conexion.inc" ?>
<?php 

$id=$_GET['id'];

echo "El id es : ".$id;


$peticion="UPDATE publicaciones  SET
   tipo_pub='".$_POST['tipo_articulo']."',
   titulo='".$_POST['titulo']."',
   resumen='".$_POST['resumen']."',
   contenido='".$_POST['contenido']."'

   WHERE id_publicacion=".$_GET['id']."
   
  ";
$resultado=mysqli_query($conexion,$peticion);
mysqli_close($conexion);

 ?>

 <script> window.location="modificar_post.php"; </script>