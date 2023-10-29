<table>
    <tr>
        <th>
         NOME
        </th>
        <th>
            Nome
        </th>
        <th>
           Compatibilidade
        </th>
       <th>
        DETALHES
       </th>
    </tr>
<?php 
require '../../db/database.php';
if (isset($_GET['vagaID'])) {
    $id = $_GET['vagaID'];
}else{

}
echo ''.$id.'';
global $conn;
$sql = "SELECT * FROM vaga WHERE id='$id'";
$result = mysqli_query($conn, $sql);
echo '<h1>DADOS PESSOAIS</h1>';
while ($row = mysqli_fetch_assoc($result)) {
    $candidato_vaga_id = $row['candidato_vaga_id'];
    $id_candidato = $row['id_candidato'];
    $id_vaga = $row['id_vaga'];
   
    
}
  
echo '<a href="../home.php"  class="btn btn-primary">FINALIZAR</a>';
?>