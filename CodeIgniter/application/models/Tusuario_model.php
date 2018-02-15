<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tusuario_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function obtener_tusuarios(){
		$query = $this->db->get('TUsuario');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	
	}
}