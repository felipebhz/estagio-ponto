<?php

class registros_model extends CI_Model
{

    private $table_name;

    public function __construct()
    {
        parent::__construct();
        $this->table_name = 'ep_registro';
        
    }

    public function index()
    {
        $this->db->from($this->table_name);
        $this->db->where("ep_usuario_id", $this->session->userdata("ep_userid"));
        $this->db->order_by("data_registro", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function validarPropriedade($regId, $user_id)
    {
        $this->db->from($this->table_name);
        $this->db->where("id",$regId);
        $this->db->where("ep_usuario_id", $user_id);

        $query = $this->db->get();
        $retorno = $query->result_array();
        
        return $retorno;

    }

    public function getDataRegistroId($dataRegistro)
    {
        $this->db->from($this->table_name);
        $this->db->where("data_registro", $dataRegistro);
        $this->db->where("ep_usuario_id", $this->session->userdata("ep_userid"));
        $query = $this->db->get();
        return json_encode($query->result_array());
        
    }

    public function novo()
    {
        return $this->db->get($this->table_name)->result_array();
    }

    public function gravar($registro)
    {
        $this->db->insert($this->table_name, $registro);
        redirect('registros');
    }

    public function show($id)
    {
        return $this->db->get_where($this->table_name, array(
            'id' => $id
        ))->row_array();
    }

    public function atualizar($id, $registro)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table_name, $registro);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table_name);
    }

}