<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Cidade_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Selecionando cidade por idCidade
     */
    function get_cidade($idCidade)
    {
        return $this->db->get_where('cidade',array('idCidade'=>$idCidade))->row_array();
    }
        
    /*
     * Selecionando tudo da tabela cidade
     */
    function get_all_cidade()
    {
        $this->db->order_by('idCidade', 'desc');
        return $this->db->get('cidade')->result_array();
    }
        
    /*
     * Adicionando cidade
     */
    function add_cidade($params)
    {
        $this->db->insert('cidade',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Atualizando cidade
     */
    function update_cidade($idCidade,$params)
    {
        $this->db->where('idCidade',$idCidade);
        return $this->db->update('cidade',$params);
    }
    
    /*
     * Deletando cidade
     */
    function delete_cidade($idCidade)
    {
        return $this->db->delete('cidade',array('idCidade'=>$idCidade));
    }
}
