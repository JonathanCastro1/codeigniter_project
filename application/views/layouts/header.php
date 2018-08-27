<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="School project">
	<title><?php echo $title; ?></title>

<!-- es importante que el jquery cargue primero,para poder usar
 el datables,datepicker,calendar etc -->
	 <script src="<?php echo base_url();?>assets/lib/js/jquery.js"></script>

 	<!-- Datatable js -->
	 <script src="<?php echo base_url();?>assets/lib/js/jquery.dataTables.min.js"></script>


	<!-- bootstrap estilos importante copiar la carpeta fonts en nuestro proyecto
	para poder usar glipicon etc,debe estar al mismo de la carpeta css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_login.css">
	
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_sidebar.css"> -->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_navbar.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_footer.css">

	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_modal.css"> -->


	<!-- calendario estilos fullcalendar -->

	 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/css/fullcalendar.min.css">

	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fullcalendar.css"> -->

	 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/css/fullcalendar.print.css" media='print'> 






	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_sidebar.css"> -->

<!-- 	font awezone estilos, copiar la carpeta webfonts en tu proyecto debe estar
al mismo nivel de carpetas que los css -->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/css/fontawesome-all.css">


	
	<!-- Datepicker estilos -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/css/jquery-ui.css">



	<!-- Tabla estilos -->

	 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/css/jquery.dataTables.min.css"> 


	 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_content.css"> 

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles_sidebar.css">	

 	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->



	<script type="text/javascript">
		var BASE_URL = "<?php echo base_url(); ?>";
	</script>


	
</head>
<body>
	<div class="content" id="wrapper">





	

 