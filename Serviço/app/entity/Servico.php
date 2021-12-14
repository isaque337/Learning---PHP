<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

Class Servico{
    /**
     * Identificador do serviço
     * @var integer
     */
    public $id;

    /**
     * Identificador do cliente
     * @var integer
     */
    public $id_cliente;

    /**
     * Nome do serviço
     * @var string
     */
    public $nome_servico;

    /**
     * Valor do serviço
     * @var integer 
     */
    public $valor_servico;

    
    /* Método responsável por cadastrar um serviço no BD
     */
    public function cadastrar(){
        //Inserir o serviço no banco
        $obDatabase = new Database('servicos');
        $this->id = $obDatabase->insert([
                                        'nome_servico'  => $this->nome_servico,
                                        'valor_servico' => $this->valor_servico
                                       ]);
        //Retornar sucesso
        return true;
    }
    
    /**
     * Método responsável por atualizar um cliente no BD
     * @return boolean
     */
    public function atualizar(){
        return (new Database('servicos'))->update('id = ' .$this->id,[
                                                                        'nome_servico'  => $this->nome_servico,
                                                                        'valor_servico' => $this->valor_servico
                                                                    ]);
    }


    /**
     * Método responsável por excluir um cliente no BD
     * @return boolean
     */
    public function excluir(){
        return (new Database('servicos'))->delete('id = '. $this->id);
    }

         /**
      * Método responsável por obter as vagas do banco de dados
      * @param string where
      * @param string $order
      * @param string limit
      * @return array
      */
      public static function getServicos($where = null, $order = null, $limit = null){
        return (new Database('servicos'))->select($where, $order, $limit)
                                        ->fetchAll(PDO::FETCH_CLASS, self::class);
        
    }

    /**
     * Método responsável por buscar uma vaga com base em seu id;
     * @param integer $id
     * @return Cliente
     */
    public static function getServico($id){
        return (new Database('servicos'))->select('id = ' .$id)
                                        ->fetchObject(self::class);
    }

}

