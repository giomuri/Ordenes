<?php
/**
* 
*/
class Clogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
		//$this->load->library('encrypt');
	}

	public function index(){
		$data['mensaje'] = '';
		$this->load->view('vlogin',$data);
	}

	public function ingresar(){
		$usu = $this->input->post('txtUsuario');
		//$pass = $this->encrypt->sha1($this->input->post('txtClave'));
		$pass = $this->input->post('txtClave');

		$res = $this->mlogin->ingresar($usu,$pass);

		if ($res != 0) {
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('orden/vorden');
			$this->load->view('layout/footer');
            //redirect('cproducto');
            //redirect('corden');
            redirect(site_url('corden/index/' . $res));
		}else{
			$data['mensaje'] = "Usuario o contraseña erronea";
			//redirect('clogin/index');
			$this->load->view('vlogin',$data);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('clogin/index');
		//redirect(base_url());
	}
}