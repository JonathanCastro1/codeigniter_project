
<!-- <script type="text/javascript">
	 $('.eliminar').click(function(event){
         event.preventDefault();

          var confirmar;
  
   confirmar=confirm("Estas seguro de eliminar este registro?");

   if (confirmar) {
     window.location=BASE_URL+'usuarios/eliminar';
   } else {
      window.location=BASE_URL+'usuarios';
   }
     });
</script>
 -->




	<div class="userBox row col-md-6 col-md-offset-1">

		<div class="page-header">

			<p class="bg-danger">

				<?php if($this->session->flashdata('userDeleted')): ?>

				<?php echo $this->session->flashdata('userDeleted'); ?>

				<?php endif; ?>

			</p>

			<p class="bg-success">

				<?php if($this->session->flashdata('userCreated')): ?>

				<?php echo $this->session->flashdata('userCreated'); ?>

				<?php endif; ?>

			</p>
				
  			<h1>Users <small>Test Beta</small></h1>
		</div>

		<div>
			<a id="agregar"><span class="btn-success btn-xs glyphicon glyphicon-plus" data-toggle="modal"  id=""></span></a>

			<a id="pdf"><span class="btn-danger  btn-xs glyphicon glyphicon-file">PDF</span></a>

			<a id="excel"><span class="btn-warning  btn-xs glyphicon glyphicon-download-alt">XLS</span></a>	

			<a><span class="btn-default  btn-xs glyphicon glyphicon-print" onclick="printFunction()">Print</span></a>		
		</div>

		<br>


<!-- Es importante que su THEAD no esté vacío en la tabla. Como dataTable requiere que especifique el número de columnas de los datos esperados -->
		<table id="tabla" class="display" > 

		 	<thead>
		        <tr>
		            <th>#</th>
		            <th>First Name</th>
		            <th>Last Name</th>
		            <th>Email</th>
		            <th>Role</th>
		            <th>Acciones</th>		            
		        </tr>
    	 	</thead>
						

		</table>




 <br>
 <br>
 <br>
</div>


<script type="text/javascript">
   function eliminar(evt){
   	
                var confirmar;
                    
                    confirmar=confirm("Are you sure to delete this record?");

                    if (confirmar) {        
                       	// si la respuesta es si,me voy al controlador
                    	// de eliminar
                    } else {
                    	// si la repuesta es no detengo el evento
                    	// osea no irme al controlador de eliminar
                        event.preventDefault();
                       
                    }

             }
</script>





