<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Administrador_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Logando administrador
     */
    function logar_administrador($email, $senha)
    {
        $this->db->select('*');
        $this->db->from('administrador');
        $this->db->where('email',$email);
        $this->db->where('senha',$senha);

        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
            return false;
        }
    }
    
    /*
     * Selecionando administrador por idAdministrador
     */
    function get_administrador($idAdministrador)
    {
        return $this->db->get_where('administrador',array('idAdministrador'=>$idAdministrador))->row_array();
    }
        
    /*
     * Selecionando tudo da tabela administrador
     */
    function get_all_administrador()
    {
        $this->db->order_by('idAdministrador', 'desc');
        return $this->db->get('administrador')->result_array();
    }
        
    /*
     * Adicionando administrador
     */
    function add_administrador($params)
    {
        $this->db->insert('administrador',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Atualizando administrador
     */
    function update_administrador($idAdministrador,$params)
    {
        $this->db->where('idAdministrador',$idAdministrador);
        return $this->db->update('administrador',$params);
    }
    
    /*
     * Deletando administrador
     */
    function delete_administrador($idAdministrador)
    {
        return $this->db->delete('administrador',array('idAdministrador'=>$idAdministrador));
    }
}
