<?php
class Empresas_model extends CI_Model
{
	public function buscarTodos(){
		return $this->db->got("empresas")->result_array();
	}
}
