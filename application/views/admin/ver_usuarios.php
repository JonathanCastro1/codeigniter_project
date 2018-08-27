<div class="col-md-6 col-md-offset-3">
               <h1 class="page-header">
                Users
                   <small>Profile</small>
                </h1>

</div>

<div class="col-md-6 col-md-offset-3 ">        

     <div class="list-group">
		 <img class="img-responsive" src="<?=base_url()?>uploads/files/<?php echo $datoss->ruta;?>" />
     </div>   

     <div class="list-group">
		 <h2 class="text-info">Date:<?php echo $datoss->fecha ?></h2>
     </div>      
 	
 	 <div class="list-group">
		 <h2 class="text-info">Email:<?php echo $datoss->email ?></h2>
     </div>
     
     <div class="list-group">
		<h2 class="text-info">Users:<?php echo $datoss->usuario ?></h2>
     </div>
	
	 <div class="list-group">	
     	<h2 class="text-info">Role:<?php echo $datoss->role ?></h2>
	 </div>	

     <div class="list-group">
		<a id="regresarUsuarios"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a>
	</div>

</div>

			



