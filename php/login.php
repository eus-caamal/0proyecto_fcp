<?php include "cabecera.inc" ?>


<div class="row">
	<div class="col-md-5">
		<form action="log_usuario.php" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
					<legend>Iniciar Sesión</legend>
				</div>
		
				<div class="form-group">
					<label for="">Usuario</label>
					<input type="text" class="form-control" name="usuario" required="required" placeholder="Introduce tu usuario">
					<label for="">Contraseña</label>
					<input type="password" class="form-control" name="contra" required="required" placeholder="Escribe tu contraseña">
					<br>

					<div class="col-md-offset-10">
						<button type="submit" class="btn btn-primary">Entrar</button>
					</div>
				</div>
		</form>
		
	</div>

<div class="col-md-5 col-md-offset-1">
	<form action="nuevo_usuario.php" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>Registrarse</legend>
			</div>
			<div class="form-group">
				    <label for="">Nombre completo</label>
					<input type="text" class="form-control" name="nombre" required="required" placeholder="Introduce tu Nombre">

					<label for="">Usuario</label>
					<input type="text" class="form-control" name="usuario" required="required" placeholder="Introduce tu usuario">

					<label for="">Contraseña</label>
					<input type="password" class="form-control" name="contra" required="required" placeholder="Escribe tu contraseña">
					<br>

				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>
			</div>
	</form>
</div>






	



</div>





<?php include "footer.inc" ?>
