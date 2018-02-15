<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reto_model extends CI_Model{

	/*--------------------CONSTRUCTOR------------------*/

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	/*--------------------FIN CONSTRUCTOR------------------*/


	/*-------------------------------------------------------*/


	/*--------------------FUNCIÓN OBTENER RETOS------------------*/

	public function obtener_retos($centro){

		$sql="SELECT * FROM Reto WHERE ID_Centro = $centro";

		$consulta = $this->db->query($sql);

		if ($consulta->num_rows() > 0){
			return $consulta;
		}
		
		else{
			return false;
		}
	}

	/*--------------------FIN FUNCIÓN OBTENER RETOS------------------*/


	/*-------------------------------------------------------*/


	/*--------------------FUNCIÓN NUEVO RETO------------------*/

	//Función que obteniendo el parámetro "datosNuevo" de la función "nuevo_reto" de "Reto.php" inserta un nuevo reto a la base de datos.
	public function nuevo_reto($datosNuevo){

		$this->db->insert('Reto',$datosNuevo);
	}

	/*--------------------FIN FUNCIÓN NUEVO RETO------------------*/		


	/*-------------------------------------------------------*/


	/*--------------------FUNCIÓN BORRAR RETO------------------*/

	//Función que obteniendo el parámetro "idretoBorrar" de la función "borrar_reto" de "Reto.php" borra el reto de la base de datos.
	public function borrar_reto($idretoBorrar){

		$this->db->where('ID_Reto',$idretoBorrar);
		$this->db->delete('Reto');
	}

	/*--------------------FIN FUNCIÓN BORRAR RETO------------------*/	


	/*-------------------------------------------------------*/


	/*--------------------FUNCIÓN OBTENER RETO------------------*/

	//Función que obteniendo el parámetro "ID_Reto" de la función "guardar_cambios_reto" de "Reto.php" obtiene los datos del reto seleccionado.
	public function obtener_reto($datosEditar){

		$sql="SELECT * FROM Reto WHERE ID_Reto = $datosEditar";

		$consulta = $this->db->query($sql);

		if ($consulta->num_rows() > 0){
			return $consulta;
		}
		
		else{
			return false;
		}
	}

	/*--------------------FIN FUNCIÓN OBTENER RETO------------------*/


	/*-------------------------------------------------------*/


	/*--------------------FUNCIÓN GUARDAR CAMBIOS RETO------------------*/

	//Función que obteniendo el parámetro "ID_Reto", "COD_Reto" y "DESC_Reto" de la función "guardar_cambios_reto" de "Reto.php" obtiene los datos del reto seleccionado.
	public function guardar_cambios_reto($idretoActualizar,$datosActualizado){

		$this->db->where('ID_Reto',$idretoActualizar);
		$this->db->update('Reto',$datosActualizado);
	}

	/*--------------------FIN FUNCIÓN GUARDAR CAMBIOS RETO------------------*/

	
}


?>