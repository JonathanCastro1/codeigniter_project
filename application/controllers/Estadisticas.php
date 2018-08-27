<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas extends CI_Controller {

	
	public function index()
	{

		 $data[ 'title' ] = 'statistics';

     if ($this->session->userdata('usuario')) {

     $data['usuario'] = $this->session->userdata('usuario'); 

      $this->load->view('layouts/header',$data); 
      $this->load->view('admin/navbar');
      $this->load->view('admin/sidebar');     
      $this->load->view('admin/estadisticas');
      $this->load->view('layouts/footer');
      
     }else{

    redirect(base_url());
      
     }


	} 

  public function consultar(){

       if (isset($_POST['submit'])) { 
         
         // esta forma de array es util para insert mas que todo
              // $data=array(                
              //   'fecha' => $this->input->post('fecha'),
              //   'fechados' => $this->input->post('fechados')                
              // );
               
              $fecha=$this->input->post('fecha');
              $fechados= $this->input->post('fechados');  

               $this->Estadisticas_Model->consultar($fecha,$fechados);

               echo "is work";

      //       if($this->Usuarios_Model->agregarUsuarios($data)) {

      //   $this->session->set_flashdata('userRegister', 'User has been created');
      //   redirect(base_url());


      // } 
        
    }      

  }


}