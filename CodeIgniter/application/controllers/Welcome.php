<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Usuario_model');
		$this->load->library('encryption');
		$this->load->library('session');
	}

	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function conexion_usuario(){
		$datos = array(
			'User' => $this->input->post('User'),
			'Password' => $this->input->post('Password'),
		);
		$datos['usuario'] = $this->Usuario_model->login_usuario($datos);
		if($datos['usuario']){
			$this->session->set_userdata('id', $datos['usuario']->result()[0]->ID_Usuario);
			redirect(base_url() . "index.php/" . $datos['usuario']->result()[0]->DESC_TUsuario);
		}else
		{
			$datos = array(
				'Inicio' => "Login Incorrecto",
			);
			redirect(base_url() . "index.php/Welcome/error", $datos);
		}
	}
	public function error(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('errors/errorconexion.html');
		$this->load->view('footer');
	}
}
