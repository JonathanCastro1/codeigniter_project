	<div class="row page-header col-md-6 col-md-offset-3 ">	
		<h2 class="fas fa-users">Edit Users</h2>
	</div>

	<div class="row col-md-6 col-md-offset-3" >

		<form action="" method="post">
			<div class="form-group">
				<label>Date:</label>
				<input type="text" class="form-control" id="datepicker" name="fecha" value="<?php echo $datoss->fecha?>">
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input type="text" class="form-control"  name="email" value="<?php echo $datoss->email?>">
			</div>

			<div class="form-group">
				<label>User:</label>
				<input type="text" class="form-control"  name="usuario" value="<?php echo $datoss->usuario?>" >	
			</div>

			<div class="form-group">
				<label>Role:</label>
				<select class="form-control" name="role" id="role">
					<option value="0">Select Role</option>				
				</select>	
			</div>

			<div class="form-group">
				<button type="submit" name="submit" value="submit" class="btn-success btn-sm glyphicon glyphicon-ok">Update</button>
				<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>
			</div>

			<div class="form-group">
				<a id="regresarUsuarios"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a>
			</div>									
		</form>
<br>
<br>
<br>
		
	</div>