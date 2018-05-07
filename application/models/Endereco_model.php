<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Endereco_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Selecionando endereco por idEndereco
     */
    function get_endereco($idEndereco)
    {
        return $this->db->get_where('endereco',array('idEndereco'=>$idEndereco))->row_array();
    }
        
    /*
     * Selecionando tudo da tabela endereco
     */
    function get_all_endereco()
    {
        $this->db->order_by('idEndereco', 'desc');
        return $this->db->get('endereco')->result_array();
    }
        
    /*
     * Adicionando endereco
     */
    function add_endereco($params)
    {
        $this->db->insert('endereco',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Atualizando endereco
     */
    function update_endereco($idEndereco,$params)
    {
        $this->db->where('idEndereco',$idEndereco);
        return $this->db->update('endereco',$params);
    }
    
    /*
     * Deletando endereco
     */
    function delete_endereco($idEndereco)
    {
        return $this->db->delete('endereco',array('idEndereco'=>$idEndereco));
    }
}
