<?php include "cabecera.inc" ?>

<?php include "php/conexion.inc" ?>
<?php 

$peticion3="SELECT * FROM publicaciones";
$resultado3=mysqli_query($conexion,$peticion3);

while ($fila3=mysqli_fetch_array($resultado3)) {
    if ($fila3['id_publicacion']>$_GET['id']) {
      $sig=$fila3['id_publicacion'];
    }
    if($fila3['id_publicacion']<$_GET['id']){
      $ant=$fila3['id_publicacion'];

    }
  
}

// $anterior=$_GET['id'];
// $ant=$anterior-1;

// $siguiente=$_GET['id'];
// $sig=$siguiente+1;


$peticion="SELECT * FROM publicaciones WHERE id_publicacion=".$_GET['id']." ";
$resultado=mysqli_query($conexion,$peticion);

  while ($fila=mysqli_fetch_array($resultado)) {
    echo '
    <a class="color" href="index.php" title=""><h1 class="text-center" >LISTA DE PUBLICACIONES</h1></a>
        <div class="col-md-10">
           <div class="thumbnail">
                <p><strong>Categoría :</strong>'.$fila['tipo_pub'].'</p>
                <div class="caption">';
                $peticion2="SELECT * FROM fotos WHERE id_publicacion=".$fila['id_publicacion']." ";
                $resultado2=mysqli_query($conexion,$peticion2);
                 while ($fila2=mysqli_fetch_array($resultado2)) {
                     echo '<img src="img/'.$fila2['imagen'].'" alt="" class="img-responsive">';

                       }

               echo '
               <br>
               <p class="justificado">'.$fila['contenido'].'</p>
               <p><strong>Autor :</strong>'.$fila['autor'].'</p>
               <p><strong>Fecha :</strong>'.$fila['fecha'].'</p>

               <a class="btn btn-primary" href="index.php" title="">Regresar</a>

               <ul class="pager">
                  <li><a href="detalle_post.php?id='.$ant.'">&larr; Anterior</a></li>
                  <li><a href="detalle_post.php?id='.$sig.'">Siguiente &rarr;</a></li>
                  
               </ul>

               </div>
           </div>
       </div>';
    }



?>



<?php include "footer.inc" ?>