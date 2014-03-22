<section class="col-md-8 card center-block no-float big-padding">
	<h1 class="text-center">Iniciar sesión</h1>
	<form action="<?php echo base_url() ?>sesiones/create" method="post">
		<div class="form-group">
			<label>
				<i class="fa fa-user"></i> Username
			</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="form-group">
			<label>
				<i class="fa fa-lock"></i> Password
			</label>
			<input type="password" name="password" class="form-control">
		</div>
		<input type="submit" class="special-btn blue-btn" value="Iniciar sesión">
	</form>
	<div class="top-space text-center">
		<a href="<?php echo base_url() ?>usuarios/new">No tengo cuenta</a>	
	</div>
	
</section>