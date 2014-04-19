
<?php include "../php/cabecera.inc" ?>
<?php include "../php/conexion.inc" ?>

<?php 

$peticion="SELECT * FROM publicaciones";
$resultado=mysqli_query($conexion,$peticion);

while ($fila=mysqli_fetch_array($resultado)) {
      
      echo ' 
      <div class="col-md-4">
       <div class="thumbnail">
       <form action="actualizar_post.php?id='.$fila['id_publicacion'].'" method="POST" class="form-inline" role="form">
       <select name="tipo_articulo" class="form-control" >
       <option value="'.$fila['tipo_pub'].'">'.$fila['tipo_pub'].'</option>
       	<option value="Programación">Programación</option>
       	<option value="Diseño">Diseño</option>
       	<option value="Redes">Redes</option>
       	<option value="Bases de datos">Bases de datos</option>
       	
       </select>

       	<input class="form-control" type="text" name="titulo" value="'.$fila['titulo'].'">

       	<textarea rows="5" class="form-control" name="resumen">'.$fila['resumen'].'</textarea>

       	<textarea rows="10" class="form-control" name="contenido">'.$fila['contenido'].'</textarea>

       
       	
       
       	<button type="submit" class="btn btn-primary">Actualizar</button>
       	<a class="btn btn-danger" href="eliminar.php?id='.$fila['id_publicacion'].'" title="">Eliminar  </a>
       </form>




       </div>


      </div>  







      ';



	# code...
}






 ?>




<?php include "../php/footer.inc" ?>