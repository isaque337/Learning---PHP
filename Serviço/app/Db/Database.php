<?php
namespace App\Db;

use \PDO;
use PDOException;

class Database{

    /**
     * Host de conexão com o banco de dados
     * @var string
     */
    const HOST = 'localhost';

    /**
     * Nome do banco de dados
     * @var string
     */
    const NAME = 'brasilcad';

    /**
     * Usuário do banco
     *@var string
     */
    const USER = 'root';

    /**
     * Senha do usuário BD
     */
    const PASS = '';

    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    /**
     * Instância de Conexão com o BD
     *@var PDO
     */
    private $connection;

    /**
     * Define a tabela e instancia a conexão
     * @var string
     */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection(); 
    }//Pouca valorização em relação ao salário, e muita pressão em cima de mim.

    /**
     * Método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try{
        $this->connection = new PDO('mysql:host=localhost;dbname=brasilcad', 'root' , '');

        }catch(PDOException $e){
            die('ERROR: '. $e->getMessage());
            
        }
         
    }

}
