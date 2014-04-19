<?php include "../php/cabecera.inc" ?>
<div class="row">
	<div class="col-md-5">
		<form action="log_admin.php" method="POST" class="form-inline" role="form">
		
			<div class="form-group">
				<label for="">Usuario</label>
				<input name="usuario" type="text" class="form-control" id="" placeholder="Ingrese su correo">

				<label for="">Contraseña</label>
				<input name="contra" type="password" class="form-control" id="" placeholder="Ingrese su contraseña">
			</div>
		
			
		     <br>
			<button type="submit" class="btn btn-primary">Entrar</button>
		</form>
	</div>


</div>
<?php include "../php/footer.inc" ?>