<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            NOME
        </th>
        <th>
            VAGA
        </th>
        <th>
            SITUAÇAO
        </th>
    </tr>
<?php
require '../../db/database.php';
if (isset($_GET['preselecID'])) {
    $id_cand_vaga = $_GET['preselecID'];
    // $insert_pre="INSERT INTO pre_seleccao id_candidato_vagas=$id";
    // $execute=mysqli_query($conn,$insert_pre);
   
}
if (isset($_GET['vagaID'])) {
    $id_vaga = $_GET['vagaID'];
}
if (isset($_GET['candidatoID'])) {
    $id_candidato = $_GET['candidatoID'];
}
echo '' . $id_candidato . '--';
echo '' . $id_vaga . '--';
echo '' . $id_cand_vaga . '--';

$sql_vaga_candi = "SELECT * FROM pre_seleccao";
$execute_sql_vaga_candi = mysqli_query($conn, $sql_vaga_candi);
while ($row_pre = mysqli_fetch_assoc($execute_sql_vaga_candi)) {
    $id_preselec=$row_pre['id'];
    echo '<tr>
    <td>
    '.$id_preselec.'
    </td>';
    $sql_candi = "SELECT nome FROM candidato WHERE id=$id_candidato";
    $execute_sql_candi = mysqli_query($conn, $sql_candi);
    while ($row_candi = mysqli_fetch_assoc($execute_sql_candi)) {
        $nome_candi=$row_candi['nome'];
        echo '<td>'.$nome_candi.'</td>';

        $sql_vaga = "SELECT nome_vaga FROM vaga WHERE id=$id_vaga";
        $execute_sql_vaga = mysqli_query($conn, $sql_vaga);
        while ($row_candi = mysqli_fetch_assoc($execute_sql_vaga)) {
            $nome_vaga=$row_candi['nome_vaga'];
            echo '<td>'.$nome_vaga.'</td>';
            
        }
    }
    echo '
    <th>
    <a href="../admin/entrevista.php?preselecID='.$id_preselec.'&vagaID='.$id_vaga.'&candidatoID='.$id_candidato.'&id_candidato_vaga=?'.$id_cand_vaga.'">DISPONÍVEL<a/> 
    <a href="">INDISPONÍVEL<a/> 
    </th>

    </tr>';
}

// echo ' <a href="../admin/candidato.php?preselecID='.$id.'">ACEITAR<a/> 
// <a href="">RECUSAR<a/> ';
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