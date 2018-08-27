
<div class="row page-header col-md-6 col-md-offset-3 ">	
	<h2 class="fas fa-users">Add Users</h2>
</div>

<div class="row col-md-6 col-md-offset-3 ">

	<form action="agregar" method="post">
		
		<input type="hidden" name="ruta" value="user.png">

		<div class="form-group">
			
			<input type="text" name="nombre" placeholder="First Name" class="form-control" id="nombre">
		</div>

		<div class="form-group">
			
			<input type="text" name="apellido" placeholder="Last Name" class="form-control" id="apellido">
		</div>	
	

		<div class="form-group">
			
			<input type="text" id="datepicker" name="fecha" placeholder="Date" class="form-control" >
		</div>

		<div class="form-group">
			
			<input type="text" name="email" placeholder="Email" class="form-control" id="email">
		</div>

		<div class="form-group">			
			
			<select class="form-control" name="estado" id="estado">
				<option value="0">Select State</option>
				
			</select>			
		</div>

		<div class="form-group">			
			
			<select class="form-control" name="capital" id="capital">
				<option value="0">Select Capital</option>
				
			</select>			
		</div>
	
		

		<div class="form-group">
			
			<input type="text" name="usuario" placeholder="Username" class="form-control">
		</div>			
		
		<div class="form-group">
			
			<input type="password" name="contrasena" placeholder="Password" class="form-control">
		</div>

		<div class="form-group">
			
			<select class="form-control" name="role" id="role">
				<option value="0">Select Role</option>				
			</select>					
		</div>


		<div class="form-group">
			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Add</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>
		</div>

		<div class="form-group">
			<a href="<?php echo base_url();?>usuarios"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a>
		</div>		

	</form>	

<br>
<br>
<br>
<br>	
</div>
