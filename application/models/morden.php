<?php
/**
* 
*/
class Morden extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getOrden($id_filtro){
		/*$query = $this->db->get('orden');
    	return $query->result();*/
    	$this->db->select('o.idOrden,o.cliente,o.idArticulo, o.fechaOrden,t.nombre,t.appaterno, t.apmaterno, a.nomArticulo');
		//$this->db->select('ruta');
		$this->db->from('orden o');
		$this->db->join('tecnico t','t.idTecnico = o.idTecnico');
		$this->db->join('articulo a','a.idArticulo = o.idArticulo');
		$this->db->where('t.idTecnico',$id_filtro);
		$s = $this->db->get();

		return $s->result();

		/*
	    //$query = $this->db->get('orden');
		$this->db->select('idOrden,cliente');
		$this->db->from('orden');
    	return $query->result();*/

    }

	public function updateOrdenId($id_orden, $id_tecnico){
    	$this->db->select('o.idOrden,o.cliente,o.idArticulo, o.fechaOrden,t.nombre,t.appaterno, t.apmaterno,');
		$this->db->from('orden o');
		$this->db->join('tecnico t','t.idTecnico = o.idTecnico');
		//$this->db->join('articulo a','a.idArticulo = o.idArticulo');
		$this->db->where('t.idTecnico',$id_tecnico);
		$this->db->where('o.idOrden',$id_orden);
		$s = $this->db->get();

		return $s->result();
	}

	public function deleteOrdenId($id_orden, $id_tecnico){
    	$this->db->select('o.idOrden,o.cliente,o.idArticulo, o.fechaOrden');
		$this->db->from('orden o');
		//$this->db->join('articulo a','a.idArticulo = o.idArticulo');
		$this->db->where('o.idOrden',$id_orden);
		$s = $this->db->get();

		return $s->result();
	}

	public function addOrden($param){
		$data = array(
            'nomArticulo' => $param ['txtNomArticulo'],
            'tipArticulo' => $param ['txtTipArticulo']
	    );

		$this->db->insert('articulo', $data);

		$this->db->select_max('idArticulo');
	    $res1 = $this->db->get('articulo');

	    if ($res1->num_rows() > 0)
	    {
	        $res2 = $res1->result_array();
	        $result = $res2[0]['idArticulo'];

	        $IdTecnico = $param ['txtId'];
			/*echo '<script language="javascript">alert("';
			echo $IdTecnico;
			echo '");</script>';*/

			$data2 = array(
	            'idOrden' => $param ['txtIdOrden'],
	            //'idTecnico' => $param ['txtId'],
	            'idTecnico' => $IdTecnico,
	            'cliente' => $param ['txtCliente'],
	            'idArticulo' => $result,
	            'fechaOrden' => $param ['txtFecha']
	        );

			return $this->db->insert('orden', $data2);
	    }

    	return NULL;
	}

	public function getOrdenId($id_filtro){
		/*$query = $this->db->get('orden');
    	return $query->result();*/
    	$this->db->select('o.idOrden,o.cliente,o.idArticulo, o.fechaOrden,t.nombre,t.appaterno, t.apmaterno, a.nomArticulo');
		//$this->db->select('ruta');
		$this->db->from('orden o');
		$this->db->join('tecnico t','t.idTecnico = o.idTecnico');
		$this->db->join('articulo a','a.idArticulo = o.idArticulo');
		$this->db->where('t.idTecnico',$id_filtro);
		$s = $this->db->get();

		return $s->result();

		/*
	    //$query = $this->db->get('orden');
		$this->db->select('idOrden,cliente');
		$this->db->from('orden');
    	return $query->result();*/

    }
}