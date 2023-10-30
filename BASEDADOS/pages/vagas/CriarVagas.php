<?php
require '../../db/database.php';
adicionarVaga()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="criarVagas.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="" method="post" class="row g-3 align-items-center">
            <h2>VAGA</h2>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nome da Vaga</span>
                <input for="nomeVaga" name="nomeVaga" id="nomeVaga" type="text" class="form-control" placeholder="Nome da Vaga" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Descrição da Vaga</span>
                <textarea for="descricao_vaga" name="descricao_vaga" id="descricao_vaga" type="textarea" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                </textarea>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Data de Término da Vaga</span>
                <input type="date" id="data_termino" name="data_termino" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Sector</span>
                <input type="text" id="sector_vaga" name="sector_vaga" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>


            <button type="submit" name="submit" class="btn btn-success btn-lg">Criar Vaga</button>

        </form>

    </div>
</body>

</html>