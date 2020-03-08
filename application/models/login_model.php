<?php

class Login_model extends CI_Model
{
    private $table_name;
    
    public function __construct()
    {
        
        parent::__construct();
        $this->table_name = 'ep_usuario';
        
    }

    public function logar($username, $password)
    {

        $userPassHash = $this->db->get_where($this->table_name, array(
                                'username' => $username
                        ))->row_array()["password"];

        $usuarioDados = $this->db->get_where($this->table_name, array(
            'username' => $username
        ))->row_array();


        $dadosSessao = array(
            'ep_userid'  => $usuarioDados["id"],
            'ep_email'     => $usuarioDados["email"],
            'ep_logado' => TRUE
        );

        if (password_verify($password, $userPassHash)){
             return $dadosSessao;
        }else{
            return false;
        }
        
    }
        
}
