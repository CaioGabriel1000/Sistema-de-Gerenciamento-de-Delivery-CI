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

    // Metodos referentes a tabela cidade
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

    // Metodos referentes a tabela bairros
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
