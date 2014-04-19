<?php include "../php/cabecera.inc" ?>
<?php include "../php/conexion.inc" ?>
<?php 
$contador=0;

$usuario=$_POST['usuario'];
$contra=$_POST['contra'];

$usuario_validado=mysql_real_escape_string($usuario);
$contra_validado=mysql_real_escape_string($contra);
$validar="
         SELECT * FROM admin WHERE 
         usuario_admin='$usuario_validado' AND
         pass_admin='$contra_validado' ";

$resultado=mysqli_query($conexion,$validar);

     while($fila=mysqli_fetch_array($resultado)){
     	$contador++;
     	
     	
     }


     if($contador>0){
	echo "Bienvenido : Administrador Ahora podrá modificar las publicaciones";
     
     echo "<meta http-equiv='refresh' content='3; url=modificar_post.php'>";

}
else {
	echo "Su registro ha fallado vuelva a intentarlo";
	echo "<meta http-equiv='refresh' content='3; url=login.php'>";
}




 ?>





<?php include "../php/footer.inc" ?>