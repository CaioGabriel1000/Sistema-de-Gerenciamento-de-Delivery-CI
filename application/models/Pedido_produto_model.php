<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Pedido_produto_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Selecionando pedido_produto por pedido_idPedido
     */
    function get_pedido_produto($pedido_idPedido)
    {
        return $this->db->get_where('pedido_produto',array('pedido_idPedido'=>$pedido_idPedido))->row_array();
    }
        
    /*
     * Selecionando tudo da tabela pedido_produto
     */
    function get_all_pedido_produto()
    {
        $this->db->order_by('pedido_idPedido', 'desc');
        return $this->db->get('pedido_produto')->result_array();
    }
        
    /*
     * Adicionando pedido_produto
     */
    function add_pedido_produto($params)
    {
        $this->db->insert('pedido_produto',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Atualizando pedido_produto
     */
    function update_pedido_produto($pedido_idPedido,$params)
    {
        $this->db->where('pedido_idPedido',$pedido_idPedido);
        return $this->db->update('pedido_produto',$params);
    }
    
    /*
     * Deletando pedido_produto
     */
    function delete_pedido_produto($pedido_idPedido)
    {
        return $this->db->delete('pedido_produto',array('pedido_idPedido'=>$pedido_idPedido));
    }
}
