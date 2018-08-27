<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$data[ 'title' ] = 'login';
		$this->load->view('layouts/header',$data);		
		$this->load->view('login');
		$this->load->view('layouts/footer');
	}


	public function iniciarSession()
	{
			$data[ 'title' ] = 'dashboard';
			$usuario = $this->input->post('usuario');
			$contrasena = $this->input->post('contrasena');
			$role = $this->input->post('role');


			$this->session->set_userdata('usuario',$usuario);
			$this->session->set_userdata('contrasena',$contrasena);
			$this->session->set_userdata('role',$role);

			$data['usuario'] = $this->session->userdata('usuario');
			// $data['contrasena'] = $this->session->userdata('contrasena');
			// $data['role'] = $this->session->userdata('role');					
				
			
			// Valido si existe el admin
			$existeUserPassAdmin=$this->Login_Model->loginAdmin($usuario ,$contrasena,$role);
			// Valido si existe el usuario
			$existeUserPassUsuario=$this->Login_Model->loginUsuarios($usuario ,$contrasena,$role);

			
			if ($existeUserPassAdmin)
			{
				$this->load->view('layouts/header',$data);
				$this->load->view('admin/navbar');
				$this->load->view('admin/sidebar');				
				$this->load->view('admin/dashboard');				
				$this->load->view('layouts/footer');

			} elseif ($existeUserPassUsuario){

				$this->load->view('layouts/header',$data);
				$this->load->view('usuarios/navbar');
				$this->load->view('usuarios/sidebar');	
				$this->load->view('usuarios/dashboard');
				$this->load->view('layouts/footer');

			

			}else {

				redirect(base_url());
		}	


}


	public function cerrarSession()	{       	
		
		$this->session->sess_destroy();

		// if ($this->session->sess_destroy()) {
			// $this->session->set_flashdata('sessionClosed', 'Session is closed');

		redirect(base_url());
		// }



	 //    $this->session->set_flashdata('sessionClosed', 'Session is closed');

		// redirect(base_url());
	}



	   public function cargarestados()
        {
          
          $datos = $this->Usuarios_Model->cargarEstados();
          // echo json_encode( $datos );
          print_r(json_encode( $datos ));

        }



	public function perfilAdmin()
	{
		$data[ 'title' ] = 'profile';

		$data['usuario'] = $this->session->userdata('usuario');
		$data['contrasena'] = $this->session->userdata('contrasena');
	

		$this->load->view('layouts/header',$data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/perfil');
		$this->load->view('layouts/footer');
	}


	public function cambiarPassAdmin()	{       
				
		 	// mantego abierta los datos de la session
			$data['usuario'] = $this->session->userdata('usuario');
			$data['contrasena'] = $this->session->userdata('contrasena');				
 			

 			$this->form_validation->set_rules('contrasenan', 'Solo numeros', 'required','required|max_length[10]|numeric');

 			$this->form_validation->set_rules('contrasenav', 'Solo numeros', 'required','required|max_length[10]|numeric');         


       if ($this->form_validation->run() == FALSE){

       		redirect(base_url("login/perfiladmin"));			

           }else{

				if (isset($_POST['submit'])) {
				
					$contrasenan = $this->input->post('contrasenan');
					$contrasenav = $this->input->post('contrasenav');							

				 $this->Login_Model->cambiarPassAdmin($contrasenav ,$contrasenan);
				

				redirect(base_url("login/perfiladmin"));	
				
				} 
				
									

	}

}

 	public function subirImagen()	{

        
        $config['upload_path'] = "./uploads/files";        
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

		$this->load->library('upload', $config);

        if (!$this->upload->do_upload('imagen')) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        // recibimos la informacion del archivo que subimos
        $file_info= $this->upload->data();

         $this->crearMiniatura($file_info['file_name']); 


        if (isset($_POST['submit'])) {
       		
        	 $imagen=$file_info['file_name'];        					

			 $this->Login_Model->subirImagen($imagen);      		   

			redirect(base_url("login/perfiladmin"));
					
                         	
            } 

	}

	 function crearMiniatura($filename){

        $config['image_library'] = 'gd2';
        $config['source_image'] = 'uploads/files/'.$filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['new_image']='uploads/thumbnails';
        $config['thumb_marker']='';//captura_thumb.png
        $config['width'] = 40;
        $config['height'] = 40;
        $this->load->library('image_lib', $config); 
        $this->image_lib->resize();
    }

	// registrar usuarios en el login
      public function register()
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
                'parroquia' => $this->input->post('parroquia'),
                'usuario' => $this->input->post('usuario'),
                'contrasena' =>  $contrasena = password_hash($this->input->post('contrasena'),PASSWORD_BCRYPT),
                'role' => 'usuario'
              );
               

               $this->Usuarios_Model->agregarUsuarios($data);

            if($this->Usuarios_Model->agregarUsuarios($data)) {

				$this->session->set_flashdata('userRegister', 'User has been created');
				redirect(base_url());


			} 
			  
        }                  
      
           
            
 }

    	public function perfilUser() {

		$data[ 'title' ] = 'profile';

		$data['usuario'] = $this->session->userdata('usuario');
		$data['contrasena'] = $this->session->userdata('contrasena');
		

		$this->load->view('layouts/header',$data);
		$this->load->view('usuarios/navbar');
		$this->load->view('usuarios/sidebar');		
		$this->load->view('usuarios/perfil');
		$this->load->view('layouts/footer');
	}




    	public function cambiarPassUser()	{       
				
		 	// mantego abierta los datos de la session
			$data['usuario'] = $this->session->userdata('usuario');
			$data['contrasena'] = $this->session->userdata('contrasena');

			$pass= $this->session->userdata('contrasena');			
 			

 			$this->form_validation->set_rules('contrasenan', 'Solo numeros', 'required','required|max_length[10]|numeric');

 			$this->form_validation->set_rules('contrasenav', 'Solo numeros', 'required','required|max_length[10]|numeric');         


       if ($this->form_validation->run() == FALSE){

       		redirect(base_url("login/perfiluser"));			

           }else{

				if (isset($_POST['submit'])) {
				
					$contrasenan = $this->input->post('contrasenan');
					$contrasenav = $this->input->post('contrasenav');							

				 $this->Login_Model->cambiarPassUser($contrasenav ,$contrasenan);
				

				redirect(base_url("login/perfiluser"));	
				
				} 
				
									

	}

}


}