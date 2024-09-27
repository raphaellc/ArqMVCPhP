<?php
require_once 'Controllers/controller_pessoa.php';

// Cria o controller
$pessoaController = new PessoaController();
echo 'index';
// Chama o método para criar a view
$pessoaController->createView();
?>
