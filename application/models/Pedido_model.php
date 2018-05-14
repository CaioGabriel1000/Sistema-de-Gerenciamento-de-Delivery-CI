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

    function get_pedido_informacoes($idPedido)
    {

        $sql = "
            SELECT
              ped.idPedido idPedido,
              ped.valor valor_pedido,
              ped.formaPagamento formaPagamento_pedido,
              ped.observacoes observacoes_pedido,
              ped.status status_pedido,
              ped.criacao criacao_pedido,
              ped.atualizacao atualizacao_pedido,
              pro.idProduto idProduto,
              pro.nome nome_produto,
              pro.preco preco_produto,
              pro.descricao descricao_produto,
              pro.imagem imagem_produto,
              pp.quantidade quantidade,
              ent.entregador entregador,
              ent.status status_entrega,
              ende.logradouro logradouro,
              ende.numero numero,
              ende.complemento complemento,
              b.nome bairro,
              c.nome cidade
            FROM
              pedido ped
            INNER JOIN
              pedido_produto pp ON pp.pedido_idPedido = ped.idPedido
            INNER JOIN
              produto pro ON pro.idProduto = pp.produto_idProduto
            LEFT JOIN
              entrega ent ON ent.idEntrega = ped.entrega_idEntrega
            LEFT JOIN
              endereco ende ON ende.idEndereco = ent.endereco_idEndereco
            LEFT JOIN
              bairro b ON b.idBairro = ende.bairro_idBairro
            LEFT JOIN
              cidade c ON c.idCidade = b.cidade_idCidade
            WHERE
              idPedido = ?
        ";

        return $this->db->query($sql, $idPedido)->result_array();

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
     * Selecionando tudo da tabela pedido por cliente
     */
    function get_all_pedido_cliente($idCliente)
    {
        $this->db->order_by('idPedido', 'desc');
        return $this->db->get_where('pedido',array('cliente_idCliente'=>$idCliente))->result_array();
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
