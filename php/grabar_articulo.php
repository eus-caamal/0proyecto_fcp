<?php include "conexion.inc" ?>
<?php

$peticion="INSERT INTO publicaciones VALUES(NULL,'".$_POST['tipo_articulo']."','".$_POST['titulo']."','".$_POST['resumen']."','".$_POST['contenido']."','".$_POST['autor']."',NULL)";

$resultado=mysqli_query($conexion,$peticion);

$peticion="SELECT * FROM publicaciones ORDER BY id_publicacion DESC LIMIT 1";
$resultado=mysqli_query($conexion,$peticion);
	while ($fila=mysqli_fetch_array($resultado)) {
		$id=$fila['id_publicacion'];
	}

if($_FILES['imagen']['type']=="image/gif" || $_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg" || $_FILES['imagen']['type']=="image/png"){

	move_uploaded_file($_FILES['imagen']['tmp_name'],"../img/".$_FILES['imagen']['name']);
}
$peticion="INSERT INTO fotos VALUES(NULL,'".$id."','".$_FILES['imagen']['name']."')";
$resultado=mysqli_query($conexion, $peticion);

if ($resultado) {
	echo "su registro ha sido satisfactorio";
}else{
	echo "su registro ha fallado";
}
  ?>
 