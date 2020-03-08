<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
       parent::__construct();
       $this->load->model("login_model"); 
    }

	public function index()
	{
        $data["title"] = "Acesso ao Sistema Estágio Ponto";
		$this->load->view('pages/login', $data);
    }
    
    public function logar()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $user = $this->login_model->logar($username, $password);

       $this->session->set_userdata($user);


        if($user["ep_logado"] === TRUE){
            redirect("registros");
        }else{
            redirect("login");
        }
    }

    public function logout()
    {
	$this->session->sess_destroy();
        redirect("login");
    }

}
