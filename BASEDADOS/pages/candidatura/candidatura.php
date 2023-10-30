<?php
require '../../db/database.php';
if (isset($_GET['vagaID'])) {
    $id = $_GET['vagaID'];
}
echo '' . $id . '';
candidatar($id)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="candidatura.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="" method="post" class="row g-3 align-items-center">
            <h2>PREENCHA A SUA CANDIDATURA PARA A VAGA - XXXX</h2>
            <div class="input-group mb-3">
                <span class="nome">Nome:</span>
                <input for="nome_candidato" name="nome_candidato" id="nome_candidato" type="text" class="form-control" placeholder="Seu nome" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
            <span class="data">Data de Nascimento:</span>
                <input for="data_nascimento" name="data_nascimento" id="data_nascimento" type="date" class="form-control" placeholder="Data de Nascimento" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="ocupacao">Ocupação:</span>
                <input for="titulo" name="titulo" id="titulo" type="text" class="form-control" placeholder="Ocupação" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="idade">Idade:</span>
                <input for="idade" name="idade" id="idade" type="number" class="form-control" placeholder="Idade" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="email">E-mail:</span>
                <input for="email" name="email" id="email" type="text" class="form-control" placeholder="E-mail" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="telemovel">Telemóvel:</span>
                <input for="telemovel" name="telemovel" id="telemovel" type="text" class="form-control" placeholder="Telemóvel" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="pais">País de Residência:</span>
                <input for="pais_residencia" name="pais_residencia" id="pais_residencia" type="text" class="form-control" placeholder="País Residência" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="nacionalidade">Nacionalidade:</span>
                <input for="nacionalidade" name="nacionalidade" id="nacionalidade" type="text" class="form-control" placeholder="Nacionalidade" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="linkedIn">LinkedIn:</span>
                <input for="linkedIn" name="linkedIn" id="linkedIn" type="text" class="form-control" placeholder="Insira o teu link do LinkedIn (Opcional)" aria-label="Jobs" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="mais">Mais Sobre Ti:</span>
                <textarea for="mais_sobre" name="mais_sobre" id="mais_sobre" type="text" class="form-control" placeholder="Mais sobre Ti" aria-label="Jobs" aria-describedby="basic-addon1">
<<<<<<< HEAD
                </textarea>
                <!-- <hr>
                <h2>Formação</h2>

                <hr>
=======
</textarea>
                <hr>
                
                
>>>>>>> origin/SheltonTeles
                <h2>Experiência</h2>

                <hr>
                <h2>Línguas</h2>
<<<<<<< HEAD
                
                <hr> -->
=======

                <hr>
>>>>>>> origin/SheltonTeles
            </div>

            <!-- <li><a href="../pages/candidatura/candidatura.php?candi=' . $id_vaga . '"  class="btn btn-primary">CANDIDATAR-SE</a></li> -->
            

            <!-- <button type="submit" name="submit" class="btn btn-success btn-lg">Formação -></button> -->
            <button type="submit" name="submit" class="btn btn-success btn-lg">Formação-></button>

        </form>

    </div>
</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $(".add_item_btn").click(function(e) {
            e.preventDefault();
            $("#formacao").prepend(` 
            <div id="row">
                    <div class="input-group mb-3">
                        <input for="nome_instituicao" name="nome_instituicao[]" id="nome_instituicao" type="text" class="form-control" placeholder="Nome da instituição" aria-label="Jobs" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input for="nome_instituicao" name="nivel_academico[]" id="nome_instituicao" type="text" class="form-control" placeholder="Nível academicmo" aria-label="Jobs" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        inicio
                        <input for="data_inicio" name="data_inicio[]" id="data_inicio" type="date" class="form-control" placeholder="" aria-label="Jobs" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        termini
                        <input for="data_termino" name="data_termino[]" id="data_termino" type="date" class="form-control" placeholder="" aria-label="Jobs" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <button type="button" class="remove_item_btn">Remover</button>
                    </div>
                </div>
                `)
        })
        $(document).on('click','.remove_item_btn',function(e){
            e.preventDefault();
            let row_item=$(this).parent().parent();
            $(row_item).remove();
        });

    })
</script> -->

</html>