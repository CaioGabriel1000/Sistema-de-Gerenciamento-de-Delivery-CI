<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Pedido_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Selecionando pedido por idPedido
     */
    function get_pedido($idPedido)
    {
        return $this->db->get_where('pedido',array('idPedido'=>$idPedido))->row_array();
    }
        
    /*
     * Selecionando tudo da tabela pedido
     */
    function get_all_pedido()
    {
        $this->db->order_by('idPedido', 'desc');
        return $this->db->get('pedido')->result_array();
    }
        
    /*
     * Adicionando pedido
     */
    function add_pedido($params)
    {
        $this->db->insert('pedido',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Atualizando pedido
     */
    function update_pedido($idPedido,$params)
    {
        $this->db->where('idPedido',$idPedido);
        return $this->db->update('pedido',$params);
    }
    
    /*
     * Deletando pedido
     */
    function delete_pedido($idPedido)
    {
        return $this->db->delete('pedido',array('idPedido'=>$idPedido));
    }
}
