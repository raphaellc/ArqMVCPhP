<?php
    class PessoaView{
        
        public function __construct($lista_pessoas){
            echo 'ola!';
            echo "
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Setor ID</th>
                    <th>Ocupação</th>
                    <th>Origem ID</th>
                    <th>Data/Hora Origem</th>
                    <th>Tipo Pessoa ID</th>
                </tr>";
            
            if ($lista_pessoas->num_rows > 0) {
                while($row = $lista_pessoas->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["nome"] . "</td>
                            <td>" . $row["dt_nasc"] . "</td>
                            <td>" . $row["celular"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["setor_id"] . "</td>
                            <td>" . $row["ocupacao"] . "</td>
                            <td>" . $row["origem_id"] . "</td>
                            <td>" . $row["dt_hr_origem"] . "</td>
                            <td>" . $row["tipo_pessoa_id"] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='10'>Nenhum resultado encontrado.</td></tr>";
            }
                echo "</table>";
        }
    }
    
?>
