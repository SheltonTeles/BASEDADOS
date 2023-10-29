<?php
require '../../db/database.php';
if (isset($_GET['id_entrevista'])) {
    $id = $_GET['id_entrevista'];
}
echo '' . $id . '';
perguntas($id); //nome do metodo
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Perguntas de Entrevista</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        .container {
            /* transparancy 30%*/
            background-color: rgba(69, 107, 140, .3);
            padding: 20px;

            box-shadow: 0 6px 10px rgba(0, 0, 0, .3);

            border-radius: 15px;
            /* It covers 85 % of the screen, it responsive and for any device size we have 80% */
            width: 85%;

            justify-content: center;
            color: darkblue;


        }
    </style>
</head>

<body class="bg-dark-subtle">
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Entrevista</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="#" method="POST" id="ad_form">
                            <div id="show_item">
                                <div class="row">
                                    <div class="input-group mb-3">

                                        <input for="pergunta" name="pergunta" id="pergunta" type="text" class="form-control m-3" placeholder="Campo de candidato aceite" aria-label="Jobs" aria-describedby="basic-addon1">

                                        <input for="pergunta" name="pergunta" id="pergunta" type="datetime-local" class="form-control m-3" placeholder="Campo de data" aria-label="Jobs" aria-describedby="basic-addon1">

                                        <input for="pergunta" name="pergunta" id="pergunta" type="text" class="form-control m-3" placeholder="Pergunta" aria-label="Jobs" aria-describedby="basic-addon1">

                                        <input for="pergunta" name="pergunta" id="pergunta" type="text" class="form-control m-3" placeholder="Avaliação" aria-label="Jobs" aria-describedby="basic-addon1">



                                    </div>
                                    <textarea class="form-control m-4 mx-auto" rows="5" id="comment" placeholder="Insira alguma nota"></textarea>
                                </div>


                                <div>

                                </div>

                                <div type="adicionar" name="adicionar" class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-success add_item_btn">Adicionar pergunta</button>

                                    <button type="submit" name="submit" class="btn btn-primary add_item_btn mt-4">Terminar</button>
                                </div>

                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






</body>

</html>