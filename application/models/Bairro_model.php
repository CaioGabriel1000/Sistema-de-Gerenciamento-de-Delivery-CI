<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Bairro_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Selecionando bairro por idBairro
     */
    function get_bairro($idBairro)
    {
        return $this->db->get_where('bairro',array('idBairro'=>$idBairro))->row_array();
    }
        
    /*
     * Selecionando tudo da tabela bairro
     */
    function get_all_bairro()
    {
        $this->db->order_by('idBairro', 'desc');
        return $this->db->get('bairro')->result_array();
    }
        
    /*
     * Adicionando bairro
     */
    function add_bairro($params)
    {
        $this->db->insert('bairro',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Atualizando bairro
     */
    function update_bairro($idBairro,$params)
    {
        $this->db->where('idBairro',$idBairro);
        return $this->db->update('bairro',$params);
    }
    
    /*
     * Deletando bairro
     */
    function delete_bairro($idBairro)
    {
        return $this->db->delete('bairro',array('idBairro'=>$idBairro));
    }
}
