<?php
require_once 'Models/model_pessoa.php';
require_once 'Views/view_lista_pessoas.php';
require_once 'Daos/dao_pessoa.php'; // Certifique-se de incluir o arquivo PessoaDAO.php

// ... (restante do código)
class PessoaController{
    private $lista_pessoas;
    public function __construct(){
        $model_pessoa = new Pessoa("localhost","root","DevMySQ!","crm_oci");
        $this->$lista_pessoas = $model_pessoa->getAllPessoas();
        echo 'pessoaCOntroller';
    }

    public function createView(){
        echo 'createVew';
        new PessoaView($this->$lista_pessoas);
    }
}

