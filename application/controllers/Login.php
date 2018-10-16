<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function autenticar()
	{
		$this->load->model("usuarios_model");
		$email = $_POST("email");
		$senha = md5($_POST("senha"));
		$usuario = $this->usuarios_model->logarUsuario($email, $senha);

		if($usuario){
			$this->session->set_userdata("usuario logado", $usuario);
			$this->session->set_flashdata("success", "Logado com sucesso!");
		}else{
			$this->session->set_flashdata("danger", "Usuário ou senha inválidos");
		}
		redirect('/');
	}
}

