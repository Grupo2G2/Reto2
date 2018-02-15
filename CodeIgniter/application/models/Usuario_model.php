<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

	/*--------------------CONSTRUCTOR------------------*/

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	/*--------------------FIN CONSTRUCTOR------------------*/


	/*-------------------------------------------------------*/

	public function nuevo_usuario($datos){
		$datosBD = array(
			'ID_Centro' => $this->input->post('ID_Centro'),
			'ID_TUsuario' => $this->input->post('ID_TUsuario'),
			'User' => $this->input->post('User'),
			'Password' => md5(sha1($this->input->post('Password'))),
			'Nombre' => $this->input->post('Nombre'),
			'Apellidos' => $this->input->post('Apellidos'),
			'Email' => $this->input->post('Email'),
			'Dni' => $this->input->post('Dni')
		);
		$this->db->insert('Usuario', $datosBD);
	}

	public function obtener_usuarios(){
		$query = "SELECT ID_Usuario, DESC_Centro, DESC_TUsuario, User, Nombre, Apellidos, Email, Dni FROM Usuario, Centro, TUsuario WHERE Usuario.ID_Centro=Centro.ID_Centro AND Usuario.ID_TUsuario=TUsuario.ID_TUsuario";
		$query = $this->db->query($query);
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}
	
	public function obtener_usuarios_valores(){
		$query = "SELECT ID_Usuario, DESC_Centro, DESC_TUsuario, User, Nombre, Apellidos, Email, Dni FROM Usuario, Centro, TUsuario WHERE Usuario.ID_Centro=Centro.ID_Centro AND Usuario.ID_TUsuario=TUsuario.ID_TUsuario";
		$query = $this->db->query($query);
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}
	public function borrar_usuario($id){
		$this->db->where('ID_Usuario',$id);
		$this->db->delete('Usuario');
	}
	public function obtener_usuario($id){
		$query = "SELECT ID_Usuario, ID_Centro, ID_TUsuario, User, Nombre, Apellidos, Email, Dni FROM Usuario WHERE ID_Usuario = '".$id."'";
		$query = $this->db->query($query);
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}
	public function obtener_nombre($id){
		$query = "SELECT User FROM Usuario WHERE ID_Usuario = '".$id."'";
		$query = $this->db->query($query);
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}
	public function actualizar_usuario($id,$datos){
		$datosBD = array(
			'ID_Centro' => $datos['ID_Centro'],	
			'ID_TUsuario' => $datos['ID_TUsuario'],	
			'User' => $datos['User'],
			'Password' => $datos['Password'],
			'Nombre' => $datos['Nombre'],
			'Apellidos' => $datos['Apellidos'],
			'Email' => $datos['Email'],
			'Dni' => $datos['Dni'],
		);
		$this->db->where('ID_Usuario',$id);
		$this->db->update('Usuario', $datosBD);
	}

	public function filtrar_usuarios_valores($filtro){
		$query = "SELECT ID_Usuario, DESC_Centro, DESC_TUsuario, User, Nombre, Apellidos, Email, Dni FROM Usuario, Centro, TUsuario WHERE Usuario.ID_Centro=Centro.ID_Centro AND Usuario.ID_TUsuario=TUsuario.ID_TUsuario";
		if ($filtro['ID_Centro'] != 0){
			$query = $query . " and Centro.ID_Centro = " . $filtro['ID_Centro'];
		}
		if($filtro['ID_TUsuario'] != 0){
			$query = $query . " and TUsuario.ID_TUsuario = " . $filtro['ID_TUsuario'];
		}		
		$query = $this->db->query($query);		
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function login_usuario($filtro){
		$query = "SELECT ID_Usuario, DESC_TUsuario FROM Usuario, TUsuario WHERE User = '". $filtro['User']."' AND Password = '". $filtro['Password']."' AND Usuario.ID_TUsuario = TUsuario.ID_TUsuario;";
		$query = $this->db->query($query);
		if($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function Usuario_profesor($id){
		if($id){
			$query = "SELECT * FROM Usuario WHERE ID_Usuario = $id AND ID_TUsuario = (SELECT ID_TUsuario FROM TUsuario WHERE DESC_TUsuario = 'Profesor')";
			$query = $this->db->query($query);
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	/*--------------------FUNCIÓN OBTENER USUARIOS------------------*/

	//Función que obteniendo el parámetro "ID_Centro" de la función "obtener_usuarios" de "Usuario.php" obtiene los usuarios.
	/*
	public function obtener_usuarios($idCentro, $idTipoUsuario){

		$sql="SELECT * FROM Usuario u, Centro ce, TUsuario tu WHERE u.ID_TUsuario = tu.ID_TUsuario AND u.ID_Centro = ce.ID_Centro AND u.ID_Centro = $idCentro AND u.ID_TUsuario = $idTipoUsuario";

		$consulta = $this->db->query($sql);

		if ($consulta->num_rows() > 0){
			return $consulta;
		}
		
		else{
			return false;
		}
	}*/

	/*--------------------FIN FUNCIÓN OBTENER USUARIOS------------------*/


	/*-------------------------------------------------------*/


	/*--------------------FUNCIÓN NUEVO USUARIO------------------*/

	//Función que obteniendo el parámetro "datosNuevo" de la función "nuevo_usuario" de "Usuario.php" inserta un nuevo usuario a la base de datos.
	/*
	public function nuevo_usuario($datosNuevo){

		$sql="INSERT INTO Usuario VALUES (NULL,'".$datosNuevo['ID_Centro']."', '".$datosNuevo['ID_TUsuario']."', '".$datosNuevo['User']."', 'Contraseña', '".$datosNuevo['Nombre']."', '".$datosNuevo['Apellidos']."', '".$datosNuevo['Email']."', '".$datosNuevo['Dni']."')";

		$consulta = $this->db->query($sql);
	}*/

	/*--------------------FIN FUNCIÓN NUEVO USUARIO------------------*/	


	/*-------------------------------------------------------*/


	/*--------------------FUNCIÓN BORRAR USUARIO------------------*/

	//Función que obteniendo el parámetro "idusuarioBorrar" de la función "borrar_usuario" de "Usuario.php" borra el usuario de la base de datos.
	/*
	public function borrar_usuario($idusuarioBorrar){

		$this->db->where('ID_Usuario',$idusuarioBorrar);
		$this->db->delete('Usuario');
	}
*/
	/*--------------------FIN FUNCIÓN BORRAR USUARIO------------------*/	


	/*-------------------------------------------------------*/


	/*--------------------FUNCIÓN OBTENER USUARIO------------------*/

	//Función que obteniendo el parámetro "ID_Usuario" de la función "guardar_cambios_usuario" de "Usuario.php" obtiene los datos del usuario seleccionado.
	/*
	public function obtener_usuario($datosEditar){

		$sql="SELECT * FROM Usuario u, Centro ce, TUsuario tu WHERE u.ID_TUsuario = tu.ID_TUsuario AND u.ID_Centro = ce.ID_Centro AND u.ID_Usuario = $datosEditar";

		$consulta = $this->db->query($sql);

		if ($consulta->num_rows() > 0){
			return $consulta;
		}
		
		else{
			return false;
		}
	}*/
	/*--------------------FIN FUNCIÓN OBTENER USUARIO------------------*/


	/*-------------------------------------------------------*/


	/*--------------------FUNCIÓN GUARDAR CAMBIOS USUARIO------------------*/

	//Función que obteniendo el parámetro de la función "guardar_cambios_usuario" de "Usuario.php" obtiene los datos del usuario seleccionado.
	public function guardar_cambios_usuario($idusuarioActualizar,$datosActualizado){

		$this->db->where('ID_Usuario',$idusuarioActualizar);
		$this->db->update('Usuario',$datosActualizado);
	}

	/*--------------------FIN FUNCIÓN GUARDAR CAMBIOS USUARIO------------------*/
}


?>