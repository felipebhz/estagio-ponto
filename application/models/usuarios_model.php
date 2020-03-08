<?php

class Usuarios_model extends CI_Model
{
    public function cadastrar($usuario)
    {
        $this->db->insert('ep_usuario', $usuario);
    }
}