<br>

<div class="col-lg-12 col-md-12">
    <p class="bg-success">
    <?php if($this->session->userdata('usuario')): ?>

    <?php echo "Welcome User: " . $this->session->userdata('usuario'); ?>

    <?php endif; ?>
    </p>    
</div>


<div class="dashboardBox "> 
 

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           User
                            <small>Dashboard</small>
                        </h1>


            <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">                             
                                        <div>Users
                                        	<div id="totalusers">                  		
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                 <!--    fin usuarios -->
                    
              <!--       <div class="col-lg-5 col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-chalkboard fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        
                                        <div>Customers
                                            <div id="totalcustomers">                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
             </div> 
 -->
                          <!--  fin profesores -->

                          <div class="col-lg-5 col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-clipboard fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">                                        
                                        <div>Projects
                                        	<div id="totalprojects">                  		
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                   <!--  fin estudiantes -->


             <!--First Row-->

           <!-- <div class="col-lg-5 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-signal fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                      
                                        <div>Online
                                            <div id="totalonline">                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div> -->

                    <!--  fin estudiantes aprobados -->

                </div>

            </div>
             
   
   </div>


</div>                 
<!-- fin dashboardbox -->

<div id="calendar" class="row col-md-6 col-md-offset-3" >
    
</div>
