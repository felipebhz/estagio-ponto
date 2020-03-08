<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros extends CI_Controller {

	
	public function index()
	{
		$this->load->model('registros_model');

		$data["registros"] = $this->registros_model->index();
		$data["title"] = "Registros - Inicial";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/registros', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
	
	
}
