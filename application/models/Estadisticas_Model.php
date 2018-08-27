<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas_Model extends CI_Model {

	
		public function consultar($fecha,$fechados)
	{


		// $sql = "SELECT * FROM usuarios WHERE fecha BETWEEN '01-01-2018' AND '31-12-2018'";

		$sql = "SELECT nombre FROM usuarios WHERE fecha BETWEEN '$fecha' AND
		  '$fechados'";	

		$query = $this->db->query($sql);

		return $query->result();
		
	}



}
	
