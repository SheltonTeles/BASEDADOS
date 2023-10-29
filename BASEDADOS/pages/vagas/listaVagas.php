<?php
require '../../db/database.php';
?>
    <ul class="list-group">
        <?php
        global $conn;
        $sql = "SELECT id,nome_vaga,descricao,data_publicacao,data_termino,sector,visualizacoes,id_admin FROM vaga";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $nome_vaga = $row['nome_vaga'];
            $descricao_vaga = $row['descricao'];
            $data_termino = $row['data_termino'];
            $sector_vaga = $row['sector'];
            $admin = $row['id_admin'];

            echo '<li>'.$nome_vaga.'</li>
            <li>'.$descricao_vaga.'</li>
            <li>'.$data_termino.'</li>
            <li>'.$sector_vaga.'</li>
            <li>'.$admin.'</li>
            
            <hr>
            ';
        }

        ?>
    </ul>