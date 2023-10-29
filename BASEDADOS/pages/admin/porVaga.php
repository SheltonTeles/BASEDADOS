<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            Nome da Vaga
        </th>
        <th>
            DATA E HORA PUBLICADA
        </th>
        <th>
            DATA DE TÉRMINO
        </th>
        <th>
            VISUALIZAÇÕES
        </th>
        <th>
            CANDIDATURAS
        </th>
        <th>
            POSTADO POR
        </th>
    </tr>
    <?php
    require '../../db/database.php';
    $sql = "SELECT * FROM vaga";
    $result = mysqli_query($conn, $sql);

    echo '<h1>VAGAS DISPONÍVEIS</h1>';
    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];
        $nome_vaga = $row['nome_vaga'];
        $data_publicacao = $row['data_publicacao'];
        $data_termino = $row['data_termino'];
        $visualizacoes = $row['visualizacoes'];
        $id_admin = $row['id_admin'];


        echo
        '
    <tr>
        <th>
          ' . $id . ' 
        </th>
        <th>
        <a href="/porVaga_Candidatos.php?vagaID='.$id.'">
          ' . $nome_vaga . '<a/> 
        </th>
        <th>
          ' . $data_publicacao . '  
        </th>
        <th>
          ' . $data_termino . '  
        </th>
        <th>
          ' . $visualizacoes . '  
        </th>';
        $nr_candidatos ="SELECT COUNT(candidato_vaga_id) FROM candidato_vaga WHERE id_vaga=$id";
        $executa_query=mysqli_query($conn,$nr_candidatos);
        while($row_num = mysqli_fetch_assoc($executa_query)){
           $numero=$row_num['COUNT(candidato_vaga_id)'];
           echo '
           <th>
            '.$numero.'
           </th>';

        }

        echo '
        <th>
          ' . $id_admin . '  
        </th>
        
    </tr>

    ';
    }
    ?>
</table>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>