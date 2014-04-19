<?php include "../php/conexion.inc" ?>

<?php 

$peticion="DELETE FROM publicaciones WHERE id_publicacion=".$_GET['id']." ";

$resultado=mysqli_query($conexion,$peticion);
mysqli_close($conexion);

 ?>

<script> window.location="modificar_post.php"; </script>