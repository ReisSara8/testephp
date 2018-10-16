<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
{


	public function novo()
	{
		$this->load->view('usuarios_view');
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = md5($_POST("senha"));
		$usuario = array($nome, $email, $senha);

		$this->load->model("usuarios_model");
		$this->usuarios_model->salvar($usuario);
		$this->load->view('usuarios/novo');
	}
}
