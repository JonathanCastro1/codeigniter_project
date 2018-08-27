<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$data[ 'title' ] = 'dashboard';
  // valido que el usuario registrado se encuentre logeado, y evitar que gente (hackers) entren atraves de una url por ejemplo http://localhost/cms_castro/dashboard
		

		if ($this->session->userdata('usuario')	&& $this->session->userdata('role')==="admin") {
			// muestra la data de la session el usuario
			$data['usuario'] = $this->session->userdata('usuario');
		 
		
			$this->load->view('layouts/header',$data);
			$this->load->view('admin/navbar');
			$this->load->view('admin/sidebar');		
			$this->load->view('admin/dashboard');
			$this->load->view('layouts/footer');
		}else{

			redirect(base_url());
		}
		
		
	}

	public function totalesGrafico(){

		$users= $this->Usuarios_Model->totalUsuarios();
		$customers= $this->Usuarios_Model->totalCustomers();
		$projects= $this->Usuarios_Model->totalProjects();

		$data = array(
			'users' => $users,
			'customers' => $customers,
			'projects' => $projects
			 );	
		// con esto establecemos el tipo de uan variable.ejemplo entero
		 // $data = (int) $data;	

		// var_dump($data);
		echo json_encode($data);

	}

		public function totalUsers(){

		$users= $this->Usuarios_Model->totalUsuarios();

		echo json_encode($data);

	}


		public function totalCustomers(){

		$data= $this->Usuarios_Model->totalCustomers();

		echo json_encode($data);

	}

		public function totalProjects(){

		$data= $this->Usuarios_Model->totalProjects();

		echo json_encode($data);

	}


	// dashboard de usuarios
	public function users()
	{
		$data[ 'title' ] = 'dashboard';
  // valido que el usuario registrado se encuentre logeado, y evitar que gente (hackers) entren atraves de una url por ejemplo http://localhost/cms_castro/dashboard
 		

		if ($this->session->userdata('usuario') && $this->session->userdata('role')==="usuario") {

			$data['usuario'] = $this->session->userdata('usuario');		   
		
			$this->load->view('layouts/header',$data);
			$this->load->view('usuarios/navbar');
			$this->load->view('usuarios/sidebar');		
			$this->load->view('usuarios/dashboard');
			$this->load->view('layouts/footer');
		}else{

			redirect(base_url());
		}
		
		
	}


}	




