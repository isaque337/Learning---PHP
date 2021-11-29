<?php

namespace App\Entity;

use \App\Db\Database;

Class Trabalhadores{
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
     * Nome do email do cliente
     * @var string
     */
    public $email;

        /**
     * Nome do telefone
     * @var integer
     */
    public $telefone;

    /**
     * Nome do cpf do cliente
     * @var string 
     */
    public $cpf;

        /**
     * Nome do login
     * @var string
     */
    public $login;

        /**
     * Senha do cliente
     * @var string
     */
    public $senha;
    /**


     * Método responsável por cadastrar um cliente no BD
     */
    public function cadastrar(){
        //Inserir o cliente no banco
        $obDatabase = new Database('trabalhadores');
        $this->id = $obDatabase->insert([
                                        'nome'        => $this->nome,
                                        'email'       => $this->email,
                                        'telefone'    => $this->telefone,
                                        'cpf'         => $this->cpf,
                                        'sexo'        => $this->sexo,
                                        'cidade_prefe'=> $this->cidade_prefe,
                                        'cep'         => $this->cep,
                                        'numero_casa' => $this->numero_casa, 
                                        'complemento' => $this->complemento,
                                        'ref_anteriores' => $this->ref_anteriores,
                                        'exp_prof'    => $this->exp_prof,
                                        'oferto'      => $this->oferto,
                                        'valor_min'   => $this->valor_min,
                                        'data'        => $this->data,
                                        'login'       => $this->login,
                                        'senha'       => $this->senha,  
                                    ]);
        //Retornar sucesso
        return true;
    }

}
