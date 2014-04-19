<?php include "conexion.inc" ?>

<?php 

$insertar="INSERT INTO usuarios VALUES(NULL,'".$_POST['nombre']."','".$_POST['usuario']."','".$_POST['contra']."' )";

$resultado=mysqli_query($conexion,$insertar);
mysqli_close($conexion);
if($resultado){
	echo "Su registro ha sido satisfactorio";


}
else {

	echo "Su registro ha fallado vuelva a intentarlo";
	echo "<meta http-equiv='refresh' content='3; url=login.php'>";
}






 ?>