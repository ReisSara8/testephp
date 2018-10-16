<?php
class Usuarios_model extends CI_Model
{
	public function salvar($usuario){
		$this->db->insert("usuarios", $usuario);
	}

	public function logarUsuario($email, $senha){
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		$usuario = $this->db->get("uusuario")->row_array();
		return $usuario;

		}

}
