<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Cliente_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Selecionando cliente por idCliente
     */
    function get_cliente($idCliente)
    {
        return $this->db->get_where('cliente',array('idCliente'=>$idCliente))->row_array();
    }
        
    /*
     * Selecionando tudo da tabela cliente
     */
    function get_all_cliente()
    {
        $this->db->order_by('idCliente', 'desc');
        return $this->db->get('cliente')->result_array();
    }
        
    /*
     * Adicionando cliente
     */
    function add_cliente($params)
    {
        $this->db->insert('cliente',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Atualizando cliente
     */
    function update_cliente($idCliente,$params)
    {
        $this->db->where('idCliente',$idCliente);
        return $this->db->update('cliente',$params);
    }
    
    /*
     * Deletando cliente
     */
    function delete_cliente($idCliente)
    {
        return $this->db->delete('cliente',array('idCliente'=>$idCliente));
    }
}
