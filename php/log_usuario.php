<?php include "cabecera.inc" ?>
<?php include "conexion.inc" ?>
<?php 
$contador=0;

$validar="SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' AND pass='".$_POST['contra']."' ";

$resultado=mysqli_query($conexion,$validar);

     while($fila=mysqli_fetch_array($resultado)){
     	$contador++;
     	$_SESSION['us']=$fila['usuario'];
     	$_SESSION['nom']=$fila['nombre'];
     	$_SESSION['id']=$fila['id_usuarios'];
     	
     }


     if($contador>0){
	echo "Bienvenido : ".$_SESSION['nom']." Ahora podrá publicar";
     echo "<meta http-equiv='refresh' content='3; url=publicar.php'>";

}
else {
	echo "Su registro ha fallado vuelva a intentarlo";
	echo "<meta http-equiv='refresh' content='3; url=login.php'>";
}




 ?>





<?php include "footer.inc" ?>