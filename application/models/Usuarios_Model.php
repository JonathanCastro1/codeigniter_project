<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_Model extends CI_Model {
	
	public function seleccionarUsuarios()
	{
		$sql = "SELECT id,nombre,apellido,fecha,email,role from usuarios";

		$query = $this->db->query($sql);
	
	
		return $query;

		
	}

		public function usuariosPdf()
	{
		$sql = "SELECT id,nombre,apellido,fecha,email,usuario,role from usuarios";

		$query = $this->db->query($sql);
	
	
		return $query->result();

		
	}

// probando el datable esta forma 1 funciona
	// 	public function pruebaTabla()
	// {

	// 	return $this->db->get("usuarios");
		
	// }

	// 	public function pruebaTabla()
	// {

	// 	$sql = "SELECT id,nombre,apellido from usuarios";

	// 	$query = $this->db->query($sql);

	// 	// foreach ($query as $row) {
 //  //            $row->id;
 //  //            $row->nombre;
 //  //            $row->apellido;
 //  //          }
	// 	// return $query;
	// 	// con esta forma retorno 2 cosas a la vez al controlador
	// 	$data = array('numr' =>$query->num_rows(),
	// 				  'result' =>$query->result()
	// 	  );

	// 	// return $query->num_rows();
	// 	// return $query->result();
	// 	return $data;
		
	// }


	// ejemplo para retornar 2 elementos
	// 	public function pruebaTabla()
	// {

	// 	$sql = "SELECT id,nombre,apellido from usuarios";

	// 	$query = $this->db->query($sql);


	// 	$data = array('numr' =>$query->num_rows(),
	// 				  'result' =>$query->result()
	// 	  );
	
	// 	return $data;
		
	// }

		public function mostrarUsuariosExcel()
	{

		$sql = "SELECT fecha,email,usuario,role
		 from usuarios";

		$query = $this->db->query($sql);

		return $query->result_array();
		
	}


		public function agregarUsuarios($data)
	{		
		
		// $sql = "INSERT INTO usuarios VALUES
		//        (null,
		//        	'$ruta',
		//        	'$nombre',
		//         '$apellido',		    
		//         '$fecha',
		//         '$email',
		//        	'$estado',
		//         '$capital',
		//         'parroquia',		        		        		        
		//         '$usuario',
		//         '$contrasena',
		//         '$role'     
		//          )";

		$query = $this->db->insert('usuarios', $data);

		// $query = $this->db->query($sql);

		return $query;
	}

		// agrego usuarios en el login
		public function register($data)
	{			

		$query = $this->db->insert('usuarios', $data);

		

		return $query;
	}



		public function editarUsuarios($fecha,$email ,$usuario ,$role ,$id)
	{			
				
		$sql = "UPDATE usuarios SET fecha = '$fecha',
				email = '$email',
				usuario = '$usuario',
				role = '$role'				
		       WHERE id = $id";

		$query = $this->db->query($sql);    	
		
		 return $query;
	}


		public function verUsuarios($id)
	{		
		
		$sql = "SELECT id,fecha,email,ruta,usuario,role from usuarios where id='$id' ";

		$query = $this->db->query($sql);

		return $query->row();
	}



	public function usuariosPorId($id)
	{
		
		$sql = "SELECT fecha,email,usuario,role from usuarios where id= $id";

		$query = $this->db->query($sql);

		return $query->row();
	}


	public function eliminarUsuarios($id)
	{			
				
		$sql = "DELETE from usuarios where id='$id'";

		$query = $this->db->query($sql);    	
		
		 return $query;
	}



	public function totalUsuarios()
	{		
		
		$sql = "SELECT COUNT(usuario) AS totalusuarios FROM usuarios";

		$query = $this->db->query($sql);

		return $query->row();
		
	}

		public function totalCustomers()
	{		
		
		$sql = "SELECT COUNT(nombre) AS totalcustomers FROM customers";
		

		$query = $this->db->query($sql);

		return $query->row();
	}

		public function totalProjects()
	{		
		
		$sql = "SELECT COUNT(nombre_project) AS totalprojects FROM projects";
		

		$query = $this->db->query($sql);

		return $query->row();
	}



		// esto es una prueba ,es mejor usar row_array()
	// para los ajax
	// 	public function totalUsuarios()
	// {		
		
	// 	// $sql = "SELECT COUNT(usuario) AS totalusuarios FROM usuarios";

	// 	$sql = "SELECT nombre,apellido FROM usuarios";
		

	// 	$query = $this->db->query($sql);

	// 	// return $query->row_array();
	// 	// return $query->result_array();
	// 	// return $query->result();
	// 	// return $query->result_object();
	// }	

		public function cargarEstados()
	{
		$sql = "SELECT estado from estados";

		$query = $this->db->query($sql);

		return $query->result();
		
	}

		public function cargarCapitales()
	{
		$sql = "SELECT capital from capitales";

		$query = $this->db->query($sql);

		return $query->result();
		
	}

		public function cargarRoles()
	{
		$sql = "SELECT role from roles";

		$query = $this->db->query($sql);

		return $query->result();
		
	}








	public function obtenerCapitales($estado)
	{
		$sql = "SELECT estados.estado,
				capitales.capital			
				from estados  INNER JOIN capitales on estados.id= capitales.id			
				where estados.estado = '$estado'";

		$query = $this->db->query($sql);

		return $query->row();
	}
	


}