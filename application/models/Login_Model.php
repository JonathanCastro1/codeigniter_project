<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

	
		public function loginAdmin($usuario ,$contrasena,$role )
	{


		$sql = "SELECT usuario,contrasena,email from usuarios where usuario='$usuario' and
		contrasena='$contrasena' and role='$role' ||  email='$usuario' and
		contrasena='$contrasena' and role='$role' 	
		";
				

		$query = $this->db->query($sql);

		return $query->row();
		
	}

		public function loginUsuarios($usuario ,$contrasena,$role )
	{
	
		//primero obtengo la contraseña de la base de datos
		$sql = "SELECT contrasena from usuarios";

		$query = $this->db->query($sql);

		$db_password=$query->result();		
			
		// cuando llegue a la contraseña especifica,paso a verificarla
			foreach ($db_password as $data_pass ) {
				 $data_pass->contrasena;
			}

		// ahora verifico que la contraseña ingresada,sea igual
		// a la contraseña en la base de datos
		   if (password_verify($contrasena,$data_pass->contrasena)) {
	             
		 // si la contraseña es verificada procedo con lo demas
		   	$sql = "SELECT usuario,contrasena,email from usuarios where usuario='$usuario' and 	role='$role' ||  email='$usuario' and role='$role' ";

 			$query = $this->db->query($sql);

			return $query->row();
	       
	         }

		
	}
	

		public function mostrarImagen()
	{		
		
		$sql = "SELECT ruta from usuarios limit 1";

		$query = $this->db->query($sql);

		return $query->row();
	}

		public function cambiarPassAdmin($contrasenav ,$contrasenan )
	{

		$sql = "UPDATE usuarios SET contrasena = '$contrasenan'
		       WHERE contrasena = '$contrasenav' and usuario='admin' and role='admin' ";

		$query = $this->db->query($sql);

		return $query;
		
	}

	public function subirImagen($imagen)
	{		
		
		$sql = "UPDATE usuarios SET ruta = '$imagen'
		       WHERE usuario='admin' and role='admin'";

		$query = $this->db->query($sql);

		return $query;
	}



	// cambiar password usuarios
		public function cambiarPassUser($contrasenav ,$contrasenan )
	{

 

		$sql = "UPDATE usuarios SET contrasena = '$contrasenan'
		       WHERE contrasena = '$contrasenav' and role='usuario' ";

		$query = $this->db->query($sql);

		return $query;
		
	}



}
	
