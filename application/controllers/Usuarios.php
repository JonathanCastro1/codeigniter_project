<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

  // public function __construct() {
  //       Parent::__construct();
  //       $this->load->model("Usuarios_Model");
  //   }
	
	public function index()
	{
        $data[ 'title' ] = 'users';
        // valido que el usuario registrado se encuentre logeado, y evitar que gente (hackers) entren atraves de una url por ejemplo http://localhost/cms_castro/dashboard
        if ($this->session->userdata('usuario')) {

            // tenemos la data del usuario para mostrarla en la navbar    
            $data['usuario'] = $this->session->userdata('usuario');            

            // traemos la data para mostrar la imagen de perfil
            // $data['datos'] = $this->Login_Model->mostrarImagen();

            // $data{'dato'} = $this->Usuarios_Model->seleccionarUsuarios();

            $this->load->view('layouts/header',$data);
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/usuarios');
            $this->load->view('layouts/footer'); 

         

        }else{

            redirect(base_url());
        }
		
	}
        // public function cargar()
        // {
          
        //   $datos = $this->Usuarios_Model->seleccionarUsuarios();
        //   echo json_encode( $datos );

        // }

      // probando datatable
        //  public function cargar()
        // {
          
        //   $datos = $this->Usuarios_Model->seleccionarUsuarios();
        //   $draw=$this->input->get('draw');
        //   // esto es util para obetener varia data el array
        //   $outpot = array(
        //     'draw' =>$draw ,
        //     'datos' =>$datos 
        //      );
        //   echo json_encode( $outpot );

        // }

// este ejemplo de datables funciona
      // public function cargar()
      //   {        

      //     // Datatables Variables
      //     $draw = intval($this->input->get("draw"));
      //     $start = intval($this->input->get("start"));
      //     $length = intval($this->input->get("length"));


      //     $books = $this->Usuarios_Model->pruebaTabla();

      //     $data = array();

      //     foreach($books->result() as $r) {

      //          $data[] = array(
      //               $r->id,
      //               $r->nombre,
      //               $r->apellido,
      //               $r->email ,
      //               $r->role
      //          );
      //     }

      //     $output = array(
      //          "draw" => $draw,
      //            "recordsTotal" => $books->num_rows(),
      //            "recordsFiltered" => $books->num_rows(),
      //            "data" => $data
      //       );
      //     echo json_encode($output);
      //     exit();



      //   }

  // esta version de datable funciona
        // public function cargar()
        // {        

        //   // Datatables Variables
        //   $draw = intval($this->input->get("draw"));
        //   $start = intval($this->input->get("start"));
        //   $length = intval($this->input->get("length"));


        //   $books = $this->Usuarios_Model->pruebaTabla();

        //   $data = array();

        //   foreach($books->result() as $r) {

        //        $data[] = array(
        //             $r->id,
        //             $r->nombre,
        //             $r->apellido,
        //             $r->email ,
        //             $r->role
        //        );
        //   }

        //   $output = array(
        //        "draw" => $draw,
        //          "recordsTotal" => $books->num_rows(),
        //          "recordsFiltered" => $books->num_rows(),
        //          "data" => $data
        //     );
        //   echo json_encode($output);
        //   exit();



        // }

// ejemplo de practica
        // public function cargar()
        // {             

        //    $result=$this->Usuarios_Model->pruebaTabla();

        //   // aqui recibimos todo
        //    print_r($result);
           
        //   // con esto accedemos a un elemento en especifico si se uso result()
        //   // en el modelo
        //    // print_r($result[0]->id);



        // }



        // ejemplo para retornar 2 elementos
        //      public function cargar()
        // {             

        //    $result=$this->Usuarios_Model->pruebaTabla();

        //   // aqui recibimos todo
        //    print_r($result);
           
        // // ok con esta forma accedemos a 2 elementos distintos
        // // que retorna del modelo en un array
        //    print_r($result['numr'].'<br>');
        // // donde ['result'] es un array,[0]
        //    // es otro array y accedemos al objeto id       
        //    print_r($result['result'][0]->id);

        // }

      // otra forma de datable funcionando
            public function cargar()
        { 
            // ponerle get o post da igual en general
            $draw = intval($this->input->get("draw"));
             // $draw = intval($this->input->post("draw"));              

           $result=$this->Usuarios_Model->seleccionarUsuarios();
        

            $data = array();            

          foreach($result->result_array() as $row) {

               $data[] = array(
                    $row['id'],
                    $row['nombre'],
                    $row['apellido'],                                 
                    $row['email'],
                    $row['role'],
                    $acciones='<a  id="ver" href="usuarios/ver/'.$row['id'].'"  ><span class="btn-primary btn-xs glyphicon glyphicon-zoom-in" data-toggle="ver" title="Ver"></span></a>'.'<a  id="editar" href="usuarios/editar/'.$row['id'].'" ><span class="btn-success btn-xs glyphicon glyphicon-pencil" data-toggle="editar" title="Editar"></span></a>'.'<a class="eliminar" id="eliminar" href="usuarios/eliminar/'.$row['id'].'" onclick="eliminar()"  ><span class="btn-danger btn-xs glyphicon glyphicon-trash" data-toggle="eliminar" title="Eliminar"></span></a>'   
               );
          }


            $output = array(
               "draw" => $draw,
                 "recordsTotal" => $result->num_rows(),
                 "recordsFiltered" => $result->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          
        }
      
      
      
      
      

        public function imgperfil()
        {
          
          $datos=$this->Login_Model->mostrarImagen();
          echo json_encode( $datos );

        }



        public function agregar()
    {   

         $data[ 'title' ] = 'add';

        if ($this->session->userdata('usuario')) {

            $data['usuario'] = $this->session->userdata('usuario');        

            // traemos la data para mostrar la imagen de perfil
            // $data['datos']=$this->Login_Model->mostrarImagen();     

            $this->load->view('layouts/header',$data);
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/agregar_usuarios');
            $this->load->view('layouts/footer');    
                           
            if (isset($_POST['submit'])) {  

              // $ruta = $this->input->post('ruta'); 
              // $nombre = $this->input->post('nombre');      
              // $apellido = $this->input->post('apellido');
              // $ruta = $this->input->post('ruta');  
              // $fecha = $this->input->post('fecha');      
              // $email = $this->input->post('email');
              // $estado = $this->input->post('estado');  
              // $capital = $this->input->post('capital');      
              // $parroquia = $this->input->post('parroquia');         
              // $usuario = $this->input->post('usuario');
              // $contrasena = $this->input->post('contrasena');
              // encrypto la contrseña al registrar
              // $contrasena = password_hash($this->input->post('contrasena'),PASSWORD_BCRYPT);
              // $role = $this->input->post('role');

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
                'role' => $this->input->post('role')
              );
                // nota el orden de los parametros, altera las posiciones en la base de datos
              // $this->Usuarios_Model->agregarUsuarios($ruta ,$nombre ,$apellido ,$fecha,$email ,$estado ,$capital ,$parroquia ,$usuario , $contrasena ,$role);

               // $this->Usuarios_Model->agregarUsuarios($data);

             if($this->Usuarios_Model->agregarUsuarios($data)) {

              $this->session->set_flashdata('userCreated', 'User has been created');
               redirect(base_url("usuarios")); 


            } 


              // redirect(base_url("usuarios"));     
                          
        }     

    }
    // else{

    //     redirect(base_url());
    // }          
            
 }
       
    

    // importante colocar el metodo de cargar en el mismo controlador
    // para evitar problemas en la url con el ajax
    //     public function cargarEstados()
    // {
        
    //     $data = $this->Cargar_Model->cargarEstados();

    //     print_r(json_encode($data));      
       
    // }

    //     public function cargarCapitales()
    // {
        
    //     $data = $this->Cargar_Model->cargarCapitales();

    //     print_r(json_encode($data));      
       
    // }

    //    public function cargarParroquias()
    // {
        
    //     $data = $this->Cargar_Model->cargarParroquias();

    //     print_r(json_encode($data));      
       
    // }

    //     public function cargarRoles()
    // {
        
    //     $data = $this->Cargar_Model->cargarRoles();

    //     print_r(json_encode($data));      
       
    // }

  //       public function obtener()
  // {
  //     // combo dependiente a lo pro Jonathan Castro Style

  //     $estado=$_POST["miestado"];

  //     $data=$this->Usuarios_Model->obtenerCapitales($estado);

  //     // print_r(json_encode($data)); 

  //     echo '<option>'.$data->capital.'</option>';



      

    // combo dependiente a lo picapiedra

      // $options="";
    //       if ($_POST["miestado"]== 'Amazonas') 
    //       {
    //           $options= '
    //           <option value="Puerto Ayacucho">Puerto Ayacucho</option>           
    //           ';   
        
    //       }

    //        if ($_POST["miestado"]== 'Anzoátegui') 
    //       {
    //           $options= '
    //           <option value="Aragua">Aragua</option>           
    //           ';         
        
    //       }

    //           if ($_POST["miestado"]== 'Apure') 
    //       {
    //           $options= '
    //           <option value="San Fernando de Apure">San Fernando de Apure</option>           
    //           ';         
        
    //       }

   //              if ($_POST["miestado"]== 'Aragua') 
    //       {
    //           $options= '
    //           <option value="Maracay">Maracay</option>           
    //           ';         
        
    //       }

    //              if ($_POST["miestado"]== 'Barinas') 
    //       {
    //           $options= '
    //           <option value="Barinas">Barinas</option>           
    //           ';         
        
    //       }

    //       echo $options;

  // }

    //     public function prueba()   {
          

    //       $password = '123';
    //       echo $password."<br>";
    //       $encryp = password_hash($password,PASSWORD_BCRYPT);
    //       echo $encryp."<br>";

    //      if (password_verify('123', $encryp)) {
    //           echo 'Password is valid!';
    //       } else {
    //           echo 'Invalid password.';
    //       }
                

    // }

        // public function prueba()
        // {
          
        //   $dates = $this->Usuarios_Model->seleccionarUsuarios();
        //   echo json_encode( $dates );

        // }



        // obtengo el parametro id
        public function editar($id) {       
            $data[ 'title' ] = 'edit';

            // mantego abierta los datos de la session
            $data['usuario'] = $this->session->userdata('usuario');
            // $data['contrasena'] = $this->session->userdata('contrasena');   
            
            $data['datoss'] = $this->Usuarios_Model->usuariosPorId($id);

             // traemos la data para mostrar la imagen de perfil
            // $data['datos']=$this->Login_Model->mostrarImagen(); 

                if (isset($_POST['submit'])) {
                            $fecha = $this->input->post('fecha');
                            $email = $this->input->post('email');
                            $usuario = $this->input->post('usuario');
                            $role = $this->input->post('role');                        

                $data['datos']= $this->Usuarios_Model->editarUsuarios($fecha,$email ,$usuario ,$role ,$id);
                $this->load->view('admin/editar_usuarios',$data);

                redirect(base_url("usuarios"));
                            
                
                } 
                
                $this->load->view('layouts/header',$data);
                $this->load->view('admin/navbar');
                $this->load->view('admin/sidebar');           
                $this->load->view('admin/editar_usuarios',$data);
                $this->load->view('layouts/footer');                     

    }


      public function eliminar($id)   {
       

            $this->Usuarios_Model->eliminarUsuarios($id);

             if($this->Usuarios_Model->eliminarUsuarios($id)) {

              $this->session->set_flashdata('userDeleted', 'User has been deleted');
               redirect(base_url("usuarios")); 


            } 
          

            // redirect(base_url("usuarios"));   
                

    } 


     public function ver($id)   {
       
        $data[ 'title' ] = 'view';

        $data['usuario'] = $this->session->userdata('usuario');
        $data['contrasena'] = $this->session->userdata('contrasena');       

        $data['datoss']=$this->Usuarios_Model->verUsuarios($id);

        // traemos la data para mostrar la imagen de perfil
        // $data['datos']=$this->Login_Model->mostrarImagen(); 
      

        $this->load->view('layouts/header',$data);
        $this->load->view('admin/navbar');
        $this->load->view('admin/sidebar');          
        $this->load->view('admin/ver_usuarios',$data);
        $this->load->view('layouts/footer');

         // echo json_encode($data);

      // de aqui para abajo estoy probando
        // echo $id = $_GET['id'];

      // $userid=$this->Usuarios_Model->verUsuarios($id);
     
      // ahy un peo cuanto los metodos del controlador y la vista 
      // tienen parametros
     // echo json_encode($userid);    

    }


     // public function prueba($id)   {
       

        // $data['usuario'] = $this->session->userdata('usuario');
        // $data['contrasena'] = $this->session->userdata('contrasena');       

        // $algo=$this->Usuarios_Model->verUsuarios($id);

        // traemos la data para mostrar la imagen de perfil
        // $data['datos']=$this->Login_Model->mostrarImagen(); 
      
        // echo json_encode($algo);
        // $this->load->view('layouts/header');
        // $this->load->view('admin/navbar',$data);
        // $this->load->view('admin/sidebar');          
        // $this->load->view('admin/ver_usuarios',$data);
        // $this->load->view('layouts/footer');

      // de aqui para abajo estoy probando
        // echo $id = $_GET['id'];

      // $userid=$this->Usuarios_Model->verUsuarios($id);
     
      // ahy un peo cuanto los metodos del controlador y la vista 
      // tienen parametros
     // echo json_encode($userid);    

    // }

    //     public function prueba()   {
       

    //     $id = $_GET['id'];

    //     echo "tu id es".$id;
                

    // }


// ejemplo de get de prueba funcionando
    //   public function prueba()   {
       

    //     $nombre = $_GET['nombre'];

    //     echo "tu nombre es".$nombre;
                

    // }

// ejemplo de post de prueba funcionando
    //    public function pruebados()   {
       

    //     $nombre = $_POST['nombre'];

    //     echo "tu nombre es".$nombre;
                

    // }



	// 	public function totalUsuarios()
	// {
		
	// 	$data['datos'] = $this->Usuarios_Model->totalUsuarios();
		
	// 	$this->load->view('admin/dashboard',$data);
		
	// }

	   public function reporteUPdf()	{       	
	
	 $data = $this->Usuarios_Model->usuariosPdf();
	

	 $totalE = $this->Usuarios_Model->totalUsuarios();  

	 // Creacion del PDF
 
    /*
     * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
     * heredó todos las variables y métodos de fpdf
     */

	 $this->pdf = new fpdf();
    // Agregamos una página
    $this->pdf->AddPage();
    // Define el alias para el número de página que se imprimirá en el pie
    $this->pdf->AliasNbPages();
 
    /* Se define el titulo, márgenes izquierdo, derecho y
     * el color de relleno predeterminado
     */
    $this->pdf->SetTitle("Reporte Usuarios");
    $this->pdf->SetLeftMargin(15);
    $this->pdf->SetRightMargin(15);
    $this->pdf->SetFillColor(200,200,200);
 
    // Se define el formato de fuente: Arial, negritas, tamaño 9
    $this->pdf->SetFont('Arial', 'B', 9);
    /*
     * TITULOS DE COLUMNAS
     *
     * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
     */
 
    $this->pdf->Cell(40,5,'Registrado','TBL',0,'L','1');
    $this->pdf->Cell(40,5,'Email','TB',0,'L','1');
    $this->pdf->Cell(40,5,'Usuario','TB',0,'L','1');
    $this->pdf->Cell(40,5,'Role','TB',0,'L','1');         
    $this->pdf->Ln(7);
    // La variable $x se utiliza para mostrar un número consecutivo
    // $x = 1;
    foreach ($data as $datos) {
      // se imprime el numero actual y despues se incrementa el valor de $x en uno
      // $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
      // Se imprimen los datos de cada alumno
      $this->pdf->Cell(40,5,$datos->fecha,'B',0,'L',0);
      $this->pdf->Cell(40,5,$datos->email,'B',0,'L',0);
      $this->pdf->Cell(40,5,$datos->usuario,'B',0,'L',0);
      $this->pdf->Cell(40,5,$datos->role,'B',0,'L',0);
     
     
      //Se agrega un salto de linea
      $this->pdf->Ln(5);
    }

    $this->pdf->Cell(40,5,'Total Fecha:','TB',0,'L','1');
   	$this->pdf->Cell(40,5, date("d-m-y"),'B',0,'L',0);
   	$this->pdf->Ln(5);
   	$this->pdf->Cell(40,5,'Total Usuarios:','TB',0,'L','1');
   	$this->pdf->Cell(40,5, $totalE->totalusuarios,'B',0,'L',0);
  
    /*
     * Se manda el pdf al navegador
     *
     * $this->pdf->Output(nombredelarchivo, destino);
     *
     * I = Muestra el pdf en el navegador
     * D = Envia el pdf para descarga
     *
     */
    $this->pdf->Output("Reporte usuarios.pdf", 'D');
     // $this->pdf->Output("Reporte usuarios.pdf", 'I');
		
	}


        public function reporteUExcel()
    {

        $data = $this->Usuarios_Model->mostrarUsuariosExcel();
       
       //load our new PHPExcel library
        $this->load->library('phpexcel');
        //activate worksheet number 1
        $this->phpexcel->setActiveSheetIndex(0);

        //name the worksheet
        $this->phpexcel->getActiveSheet()->setTitle('Reporte Usuarios');

          // mostramos la data del modelo biene en forma de array, con result_array

         $this->phpexcel->getActiveSheet()->fromArray($data);

 
    $filename='Reporte usuarios.xls'; //save our workbook as this file name
    header('Content-Type: application/vnd.ms-excel'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache
                
    //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
    //if you want to save it as .XLSX Excel 2007 format
    $objWriter = PHPExcel_IOFactory::createWriter($this->phpexcel, 'Excel5');  
    //force user to download the Excel file without writing it to server's HD
    $objWriter->save('php://output');
       
        
    }




}
