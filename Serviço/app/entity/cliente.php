<?php

namespace App\Entity;

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
     * Método responsável por cadastrar uma vaga no BD
     */
    public function cadastrar(){
        //Inserir o cliente no banco

        //Atribuir o ID na instância

        //Retornar sucesso
    }

}

