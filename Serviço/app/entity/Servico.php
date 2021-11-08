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

    /**
     * Método responsável por cadastrar um serviço no BD
     */
    public function cadastrar(){
        //Inserir o serviço no banco
        $obDatabase = new Database('servico');
        $this->id = $obDatabase->insert([
                                        'nome'    => $this->nome,
                                        'cpf'     => $this->cpf,
                                        'status'  => $this->status
                                       ]);
        //Retornar sucesso
        return true;
    }

}

