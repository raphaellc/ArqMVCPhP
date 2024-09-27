<?php
require_once "Daos/dao_pessoa.php";
class Pessoa {
    private $pessoaDAO;

    public function __construct($servername, $username, $password, $dbname) {
        $this->pessoaDAO = new PessoaDAO($servername, $username, $password, $dbname);
        
    }

    public function getAllPessoas() {
        return $this->pessoaDAO->obter_todas_pessoas();
    }
}
?>