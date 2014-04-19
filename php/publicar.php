<?php include "cabecera.inc" ?>

<div class="col-md-7">
	<form action="grabar_articulo.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
				<div class="form-group">
					<label>Título</label>
					<input type="text" class="form-control" required="required" name="titulo" placeholder="Escriba el título de su articulo">
					<label>Categorias</label>
					<select name="tipo_articulo"id="tipo-articulo" class="form-control" >
						<option value="Programación">Programación</option>
						<option value="Diseño">Diseño</option>
						<option value="Redes">Redes</option>
						<option value="Base de datos">Base de datos</option>
					</select>
					<label>agregar Foto o imagen</label>
					<input type="file" class="form-control" required="required" name="imagen" id="imagen" >
					<label>Breve descripcion del artículo</label>

					<textarea name="resumen" rows="5" class="form-control"></textarea>

					<label>contenido completo</label>
					<textarea name="contenido" rows="15" class="form-control"></textarea>

					<input type="hidden" name="autor"  value="<?php echo $_SESSION['nom']; ?>">

                    


				</div> 
		
				
		
				<div class="form-group">
					<div class="col-sm-2 col-sm-offset-10">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
		</form>	
</div>

<?php include "footer.inc" ?>