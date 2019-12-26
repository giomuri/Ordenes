<?php
/**
* 
*/
class Corden extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('morden');
		//$this->load->library('encrypt');
	}

	public function index($id_filtro){
		$res = $this->morden->getOrden($id_filtro);

		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view("orden/vorden", array('res' => $res));
		$this->load->view('layout/footer');
	}

	public function updateOrdenId($id_orden,$id_tecnico){

		$res = $this->morden->updateOrdenId($id_orden,$id_tecnico);
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view("orden/vguardarorden", array('res' => $res));
		$this->load->view('layout/footer');
	}

	public function newOrden(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('orden/vaddorden');
		$this->load->view('layout/footer');
	}

	public function addOrden(){
		$id_filtro = $this->input->post('txtId');
		$param = array();
		$param ['txtId']= $this->input->post('txtId');
		$param ['txtIdOrden']= $this->input->post('txtIdOrden');
		$param ['txtCliente']= $this->input->post('txtCliente');
		$param ['txtNomArticulo']= $this->input->post('txtNomArticulo');
		$param ['txtTipArticulo']= $this->input->post('txtTipArticulo');
		$param ['txtFecha']= $this->input->post('txtFecha');
		
		$res = $this->morden->addOrden($param);
		//redirect(site_url('corden/index/'.$id_filtro));

		$res1 = $this->morden->getOrden($id_filtro);

		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view("orden/vorden", array('res' => $res1));
		//$this->load->view('orden/vaddorden');
		$this->load->view('layout/footer');
	}

	public function deleteOrdenId($id_orden, $id_tecnico){

		$res = $this->morden->deleteOrdenId($id_orden, $id_tecnico);
		
		$res1 = $this->morden->getOrden($id_tecnico);

		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view("orden/veliminarorden", array('res' => $res1));
		//$this->load->view('orden/vaddorden');
		$this->load->view('layout/footer');
	}
}