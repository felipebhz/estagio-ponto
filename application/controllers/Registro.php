<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('registros_model');

	}

	public function ajaxItemData($dataRegistro)
	{
		$this->load->model('registros_model');
		$dataJson = $this->registros_model->getDataRegistroId($dataRegistro);
		$jd = json_decode($dataJson);
		echo $dataJson;
		if(sizeof($jd) > 0){
		}
	}

	public function novo()
	{

		$data["registros"] = $this->registros_model->novo();
		$data["title"] = "Inserir Novo Registro";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/inserir-registro', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function gravar()
	{
		$registro = $this->input->post();
		$this->load->model('registros_model');
		$this->registros_model->gravar($registro);
	}

	public function edit($id)
	{
		$checagem = $this->registros_model->validarPropriedade($id, $this->session->userdata("ep_userid"));

			if (!count($checagem) > 0) {
				redirect('registro/novo');
			} else {
				$data["registro"] = $this->registros_model->show($id);
				$data["title"] = "Editar Registro";
				$this->load->view('templates/header', $data);
				$this->load->view('templates/nav-top', $data);
				$this->load->view('pages/inserir-registro', $data);
				$this->load->view('templates/footer', $data);
				$this->load->view('templates/js', $data);
			};
	}

	public function atualizar($id)
	{
		$registro = $this->input->post();
		$this->registros_model->atualizar($id, $registro);
		redirect('registros');
	}

	public function deletar($id)
	{
		$checagem = $this->registros_model->validarPropriedade($id, $this->session->userdata("ep_userid"));
		if (!count($checagem) > 0) {
			redirect('registros');
		} else {
		$this->db->where('id',$id);
		$this->db->delete('ep_registro');
		redirect('registros');
		}
	}	

}
