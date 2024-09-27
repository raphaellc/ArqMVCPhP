<?php

// Classe DAO genérica
class DAO {
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Falha na conexão: " . $this->conn->connect_error);
        }
    }

    public function executar_consulta($sql) {
        $result = $this->conn->query($sql);
        return $result;
    }

    public function __destruct() {
        $this->conn->close();
    }
}

// Classe PessoaDAO específica
class PessoaDAO extends DAO {
    public function obter_todas_pessoas() {
        $sql = "SELECT id, nome, dt_nasc, celular, email, setor_id, ocupacao, origem_id, dt_hr_origem, tipo_pessoa_id FROM crm_oci_pessoas";
        return $this->executar_consulta($sql);
    }
}