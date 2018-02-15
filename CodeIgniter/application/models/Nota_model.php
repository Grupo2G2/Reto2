<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nota_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function obtener_nota_alumno_alumnos($idreto, $iduser, $idcompetencia, $idevaluador){
		$query = $this->db->query("SELECT ID_Nota FROM Notas WHERE ID_Reto = $idreto AND ID_Usuario = $iduser AND ID_Competencia = $idcompetencia AND ID_Evaluador = $idevaluador");
		if ($query->num_rows() > 0){
			return $query->result()[0]->ID_Nota;
		}else{
			return 0;
		}
	}
		

		public function obtener_nota_alumno($idreto, $iduser, $idcompetencia){
		$query = $this->db->query("SELECT ID_Nota FROM Notas WHERE ID_Reto = $idreto AND ID_Usuario = $iduser AND ID_Competencia = $idcompetencia AND ID_Medicion = 3");
		if ($query->num_rows() > 0){
			return $query->result()[0]->ID_Nota;
		}else{
			return 0;
		}
	}




	public function agregar_notas_profesor($idreto, $iduser, $idcompetencia, $nota, $evaluador){
		$datosBD = array(
			'ID_Reto' => $idreto,
			'ID_Medicion' => 3,
			'ID_Usuario' => $iduser,
			'ID_Competencia' => $idcompetencia,
			'Nota' => $nota,
			'ID_Evaluador' => $evaluador
		);
		$this->db->insert('Notas', $datosBD);
	}



		public function agregar_notas_alumno($idreto, $iduser, $idcompetencia, $nota, $evaluador){
		$datosBD = array(
			'ID_Reto' => $idreto,
			'ID_Medicion' => 1,
			'ID_Usuario' => $iduser,
			'ID_Competencia' => $idcompetencia,
			'Nota' => $nota,
			'ID_Evaluador' => $evaluador
		);
		$this->db->insert('Notas', $datosBD);
	}

	public function actualizar_nota($ID_Nota, $Nota){
		$datosBD = array(	
			'Nota' => $Nota,
		);
		$this->db->where('ID_Nota',$ID_Nota);
		$this->db->update('Notas', $datosBD);
	}	

	public function actualizar_nota_profesor($ID_Nota, $Nota, $id_eva){
		$datosBD = array(	
			'Nota' => $Nota,
			'ID_Evaluador' => $id_eva
		);
		$this->db->where('ID_Nota',$ID_Nota);
		$this->db->update('Notas', $datosBD);
	}
}
?>