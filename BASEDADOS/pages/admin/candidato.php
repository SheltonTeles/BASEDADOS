<?php 
require '../../db/database.php';
if (isset($_GET['candidatoID'])) {
    $id = $_GET['candidatoID'];
}
echo ''.$id.'';
global $conn;
$sql = "SELECT * FROM candidato WHERE id='$id'";
$result = mysqli_query($conn, $sql);
echo '<h1>DADOS PESSOAIS</h1>';
while ($row = mysqli_fetch_assoc($result)) {
    $nome = $row['nome'];
    $data_nascimento = $row['data_nascimento'];
    $titulo = $row['titulo'];
    $idade = $row['idade'];
    $email = $row['email'];
    $telemovel = $row['telemovel'];
    $nacionalidade = $row['nacionalidade'];
    $cv = $row['CV'];
    $linked_in = $row['linked_in'];

    echo '<li>'.$nome.'</li>
    <li>'.$data_nascimento.'</li>
    <li>'.$idade.'</li>
    <li>'.$telemovel.'</li>
    <li>'.$nacionalidade.'</li>
    <li>'.$cv.'</li>
    <li>'.$linked_in.'</li>
    
    <hr>
    ';
}
    $sql = "SELECT * FROM formacao_academica WHERE id_candidato='$id'";
$result = mysqli_query($conn, $sql);
echo '<h1>FORMAÇÃO ACADÉMICA</h1>';
while ($row = mysqli_fetch_assoc($result)) {
    $nome_instituicao = $row['nome_instituicao'];
    $nivel_academico = $row['nivel_academico'];
    $data_inicio = $row['data_inicio'];
    $data_termino = $row['data_termino'];
    echo '<li>'.$nome_instituicao.'</li>
    <li>'.$nivel_academico.'</li>
    <li>'.$data_inicio.'</li>
    <li>'.$data_termino.'</li>    
    <hr>
    ';
    
};
$sql = "SELECT * FROM historico_profissional WHERE id_candidato='$id'";
$result = mysqli_query($conn, $sql);
echo '<h1>HISTÓRICO PROFISSIONAL</h1>';
while ($row = mysqli_fetch_assoc($result)) {
    $funcao = $row['funcao'];
    $nome_empresa = $row['nome_empresa'];
    $localidade = $row['localidade'];
    $area = $row['area'];
    $data_inicio = $row['data_inicio'];
    $data_termino = $row['data_termino'];

    echo '<li>'.$funcao.'</li>
    <li>'.$nome_empresa.'</li>
    <li>'.$area.'</li>
    <li>'.$localidade.'</li>    
    <li>'.$data_inicio.'</li>    
    <li>'.$data_termino.'</li>    
    <hr>
    ';
    
};
$sql = "SELECT * FROM lingua_candidato WHERE id_candidato='$id'";
$result = mysqli_query($conn, $sql);
echo '<h1>LÍNGUAS</h1>';
while ($row = mysqli_fetch_assoc($result)) {
    $nome_lingua = $row['nome_lingua'];
    $prof_falar = $row['prof_falar'];
    $prof_ler = $row['prof_ler'];
    $prof_escrever = $row['prof_escrever'];
    echo '<li>'.$nome_lingua.'</li>
    <li>'.$prof_falar.'</li>
    <li>'.$prof_ler.'</li>
    <li>'.$prof_escrever.'</li>    
    <hr>
    ';
    
};
echo ' <a href="../admin/candidato.php?preselecID='.$id.'">ACEITAR<a/> 
<a href="">RECUSAR<a/> ';
?>