<?php

namespace App\Entity;

use \App\Db\Database;

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

}

