<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Perguntas de Entrevista</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>


    </style>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Adicionar as perguntas</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="#" method="POST" id="ad_form">
                            <div id="show_item">
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <input type="text" name="pergunta_name[]" class="form-control" placeholder="Escrever pergunta" required>
                                    </div>

                                    <div class="col-md-3  mb-3 d-grid">
                                        <button class="btn btn-success add_item_btn">Adicionar</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Add" class="btn btn-primary w-25" id="add_btn ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
           $(".add_item_btn").click(function(e){
                e.preventDefault();
                $("#show_item").prepend('<div id="show_item">' +
        '<div class="row">' +
        '<div class="col-md-8 mb-3">' +
        '<input type="text" name="pergunta_name[]" class="form-control" placeholder="Escrever pergunta" required>' +
        '</div>' +
        '<div class="col-md-3 mb-3 d-grid">' +
        '<button class="btn btn-danger remove_item_btn">Remover</button>' +
        '</div>' +
        '</div>' +
        '</div>');
           }); 
           
           $(document).on('click', '.remove_item_btn', function(e){
                e.preventDefault()
           });
        });
    </script>



</body>

</html>