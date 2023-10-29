<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            NOME
        </th>
        <th>
            SITUAÇAO
        </th>
    </tr>
    <?php
    require '../../db/database.php';
    if (isset($_GET['vagaID'])) {
        $id_vaga = $_GET['vagaID'];
    } else {
    }
    echo '' . $id_vaga . '';
    $sql = "SELECT * FROM candidato_vaga WHERE id_vaga='$id_vaga'";
    $result = mysqli_query($conn, $sql);
    // $linha_result = mysqli_fetch_array($result);
    while ($row = mysqli_fetch_assoc($result)) {
        $id_candidato = $row['id_candidato'];
        $id_candidato_vaga=$row['candidato_vaga_id'];
        $candidatos = "SELECT * FROM candidato WHERE id='$id_candidato'";
        $resultado = mysqli_query($conn, $candidatos);
        while ($row_candidatos = mysqli_fetch_assoc($resultado)) {
            $nome = $row_candidatos['nome'];
            $id = $row_candidatos['id'];
            echo '<tr>
            <th>
           ' . $id . '
            </th>
            <th>
            <a href="../admin/candidato.php?candidatoID='.$id.'">
            ' . $nome . '<a/> 
            </th>
            <th>
            <a href="../admin/preselec.php?preselecID='.$id_candidato_vaga.'&vagaID='.$id_vaga.'&candidatoID='.$id_candidato.'">ACEITAR<a/> 
            <button>SAIR</button>
            </th>
            </tr>
            ';
            
        }
    }

    echo '<a href="../home.php"  class="btn btn-primary">FINALIZAR</a>';
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