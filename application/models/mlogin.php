<?php
/**
* 
*/
class Mlogin extends CI_Model
{
	public function ingresar($usu,$pass){
		$this->db->select('p.idTecnico,u.idUsuario, p.nombre, p.appaterno, p.apmaterno');
		$this->db->from('usuario u');
		$this->db->join('tecnico p','p.idTecnico = u.idPersona');
		$this->db->where('u.nomUsuario',$usu);
		$this->db->where('u.clave',$pass);

		$resultado = $this->db->get();

		if ($resultado->num_rows() == 1) {
			$r = $resultado->row();

			$s_usuario = array(
				's_idPersona' => $r->idTecnico,
				's_idUsuario' => $r->idUsuario,
				's_usuario' => $r->nombre.", ".$r->appaterno." ".$r->apmaterno
			);

			$this->session->set_userdata($s_usuario);

			$idfiltro = $r->idTecnico;
			// $this->session->userdata('s_idUsuario',$r->idUsuario);
			// $this->session->userdata('s_usuario', $r->nombre.", ".$r->appaterno);

			return $idfiltro;
		}else{
			return 0;
		}


		/*$this->db->select('p.idPersona,u.idUsuario, p.nombre, p.appaterno, p.apmaterno');
		$this->db->from('usuario u');
		$this->db->join('persona p','p.idPersona = u.idPersona');
		$this->db->where('u.nomUsuario',$usu);
		$this->db->where('u.clave',$pass);

		$resultado = $this->db->get();

		if ($resultado->num_rows() == 1) {
			$r = $resultado->row();

			$s_usuario = array(
				's_idPersona' => $r->idPersona,
				's_idUsuario' => $r->idUsuario,
				's_usuario' => $r->nombre.", ".$r->appaterno." ".$r->apmaterno
			);

			//$this->session->userdata('s_idUsuario',$r->idPersona);
			//$this->session->userdata('s_usuario', $r->nombre.", ".$r->appaterno);

			$this->session->set_userdata($s_usuario);
			//$this->session->userdata($s_usuario);
			// $this->session->userdata('s_idUsuario',$r->idUsuario);
			// $this->session->userdata('s_usuario', $r->nombre.", ".$r->appaterno);

			return 1;
		}else{
			return 0;
		}*/

	}
}