<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Entrega_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Selecionando entrega por idEntrega
     */
    function get_entrega($idEntrega)
    {
        return $this->db->get_where('entrega',array('idEntrega'=>$idEntrega))->row_array();
    }
        
    /*
     * Selecionando tudo da tabela entrega
     */
    function get_all_entrega()
    {
        $this->db->order_by('idEntrega', 'desc');
        return $this->db->get('entrega')->result_array();
    }
        
    /*
     * Adicionando entrega
     */
    function add_entrega($params)
    {
        $this->db->insert('entrega',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Atualizando entrega
     */
    function update_entrega($idEntrega,$params)
    {
        $this->db->where('idEntrega',$idEntrega);
        return $this->db->update('entrega',$params);
    }
    
    /*
     * Deletando entrega
     */
    function delete_entrega($idEntrega)
    {
        return $this->db->delete('entrega',array('idEntrega'=>$idEntrega));
    }
}
