<?php
require '../../db/database.php';
if(isset($_GET['vagaID'])){
    $id = $_GET['vagaID'];
}
echo ''.$id.'';
candidatar($id)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="" method="post" class="row g-3 align-items-center">
            <h2>PREENCHA A SUA CANDIDATURA PARA A VAGA - XXXX</h2>
            <div class="input-group mb-3">
                <input for="nome_candidato" name="nome_candidato" id="nome_candidato" type="text" class="form-control" placeholder="Seu nome" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input for="data_nascimento" name="data_nascimento" id="data_nascimento" type="date" class="form-control" placeholder="Data de Nascimento" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input for="titulo" name="titulo" id="titulo" type="text" class="form-control" placeholder="Ocupação" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input for="idade" name="idade" id="idade" type="number" class="form-control" placeholder="Idade" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input for="email" name="email" id="email" type="text" class="form-control" placeholder="E-mail" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input for="telemovel" name="telemovel" id="telemovel" type="text" class="form-control" placeholder="Telemovel" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input for="pais_residencia" name="pais_residencia" id="pais_residencia" type="text" class="form-control" placeholder="País Residência" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input for="nacionalidade" name="nacionalidade" id="nacionalidade" type="text" class="form-control" placeholder="Nacionalidade" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input for="linkedIn" name="linkedIn" id="linkedIn" type="text" class="form-control" placeholder="Insira o teu link do LinkedIn (Opcional)" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <textarea for="mais_sobre" name="mais_sobre" id="mais_sobre" type="text" class="form-control" placeholder="Mais sobre Ti" aria-label="Jobs" aria-describedby="basic-addon1">
</textarea>
                <hr>
                <h2>Formação</h2>

                <hr>
                <h2>Experiência</h2>

                <hr>
                <h2>Línguas</h2>
                
                <hr>
            </div>



            <button type="submit" name="submit" class="btn btn-success btn-lg">CANDIDATAR-SE</button>

        </form>

    </div>
</body>

</html>