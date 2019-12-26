<?php

class Usuario extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getUser(){
		$query = $this->db->get('productos');
		return $query->result_array();	
	}

	function getUserById($id){
		$this->db->WHERE('id_producto', $id);
		$query = $this->db->get('productos');
		return $query->row();	
	}



}



