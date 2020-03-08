<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	
	public function index()
	{
		$data["title"] = "Cadastro de Usuário";

		$this->load->view('pages/cadastro-usuario', $data);
	}

	public function cadastrar()
	{

		$this->load->model('usuarios_model');
		$usuario = array(
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
			'nome_completo' => $this->input->post('nome_completo'),
			'email' => $this->input->post('email'),
			'setor' => $this->input->post('setor'),
			'status' => $this->input->post('status'),
			'created_at' => $this->input->post('created_at'),
		);

		$this->usuarios_model->cadastrar($usuario);
		return redirect('login');
	}
	
	
}
