<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {

	public function mostrar()
	{
		$this->load->model("empresas_model");
		$lista = $this->empresas_model->buscarTodos();
		$dados = array("empresas" => $lista);
		$this->load->view('empresas/view', $dados);
	}
}
