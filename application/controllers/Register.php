<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function index()
	{

		  $data[ 'title' ] = 'register';               

            $this->load->view('layouts/header',$data);          
            $this->load->view('register');
            $this->load->view('layouts/footer');    
                           
            if (isset($_POST['submit'])) {               

          // el primero es atributo o clave, el segundo es el valor =>
          // nota cuando inserto de esta forma,no acepta datso vacios
          // en formulario
              $data=array(
                'id' => null,
                'ruta' => $this->input->post('ruta'),
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'fecha' => $this->input->post('fecha'),
                'email' => $this->input->post('email'),
                'estado' => $this->input->post('estado'),
                'capital' => $this->input->post('capital'),                
                'usuario' => $this->input->post('usuario'),
                'contrasena' =>  $contrasena = password_hash($this->input->post('contrasena'),PASSWORD_BCRYPT),
                'role' => 'usuario'
              );
               

               // $this->Usuarios_Model->agregarUsuarios($data);

            if($this->Usuarios_Model->agregarUsuarios($data)) {

      				$this->session->set_flashdata('userRegister', 'User has been created');
      				redirect(base_url());


			     } 
			  
        }                  
      
		
	}

	   public function cargarEstados()
        {
          
          $datos = $this->Usuarios_Model->cargarEstados();
          
          echo json_encode($datos);

        }

          public function cargarCapitales()
        {
          
          $datos = $this->Usuarios_Model->cargarCapitales();
          
          echo json_encode($datos);

        }

          public function cargarRoles()
        {
          
          $datos = $this->Usuarios_Model->cargarRoles();
          
          echo json_encode($datos);

        }


           public function comboDependiente()
        {
          
          $datos = $this->Usuarios_Model->obtenerCapitales();
          
          echo json_encode($datos);

        }


        public function combo()
     {
      

      $estado=$_POST["miestado"];

      $data=$this->Usuarios_Model->obtenerCapitales($estado);

      

      echo '<option>'.$data->capital.'</option>';

    }







}