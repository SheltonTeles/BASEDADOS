<?php
require '../../db/database.php';
?>
    

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listaVagas.css">
    <style>

        ul {
            list-style: none;
        }

        .list-group {
        list-style: none;
        padding: 0;
        }

        .list-group li {
            margin-bottom: 10px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }

        .list-group li:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .list-group li a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .list-group hr {
            border: 5px solid #ddd;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
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

</body>
</html>