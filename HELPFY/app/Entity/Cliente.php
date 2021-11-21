<?php

namespace App\Entity;

use \App\Db\Database;

Class Cliente{
    /**
     * Identificador do cliente
     * @var integer
     */
    public $id;

    /**
     * Nome do cliente
     * @var string
     */
    public $nome;

    /**
     * Nome do cpf
     * @var integer
     */
    public $cpf;

    /**
     * Status (ativo ou inativo)
     * @var string 
     */
    public $status;

    /**
     * Método responsável por cadastrar um cliente no BD
     */
    public function cadastrar(){
        //Inserir o cliente no banco
        $obDatabase = new Database('cliente');
        $this->id = $obDatabase->insert([
                                        'nome'    => $this->nome,
                                        'cpf'     => $this->cpf,
                                        'status'  => $this->status
                                       ]);
        //Retornar sucesso
        return true;
    }

}

