 <div class="row col-md-6 col-md-offset-3 ">
               <h1 class="page-header">
                Admin
                   <small>Profile</small>
                </h1>

 </div>


<form action="<?php echo base_url();?>login/subirimagen" method="post" enctype="multipart/form-data">		

	<div class="form-group col-md-6 col-md-offset-3">		
	
		<label>Img:</label>
		<input type="file" class="form-control" name="imagen" >

		<div class="text-center ">
			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Upload</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>	

			<br>
			<br>
		</div>			
	</div>

 </form>


<form action="<?php echo base_url();?>login/cambiarpassadmin" method="post">
			
		<div class="form-group col-md-6 col-md-offset-3">	

			
			<input type="password" class="form-control" name="contrasenan" placeholder="New Password">

			<input type="password" class="form-control" name="contrasenav" placeholder="Old Password">					
			
		<div class="text-center">
			<button type="submit"  name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Change</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>	
		</div>

		<br>
		<br>

		</div>



</form>

