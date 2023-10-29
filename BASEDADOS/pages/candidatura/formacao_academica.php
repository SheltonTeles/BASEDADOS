<?php
require '../../db/database.php';
if (isset($_GET['candidatoID'])) {
    $id = $_GET['candidatoID'];
}
echo '' . $id . '';
formacao($id);
?>
<h2>Formação</h2>
<form action="" method="post" class="row g-3 align-items-center">
       
                <div id="formacao">
                    <div class="input-group mb-3">
                        <input for="nome_instituicao" name="nome_instituicao" id="nome_instituicao" type="text" class="form-control" placeholder="Nome da instituição" aria-label="Jobs" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input for="nivel_academico" name="nivel_academico" id="nome_instituicao" type="text" class="form-control" placeholder="Nível academicmo" aria-label="Jobs" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        inicio
                        <input for="data_inicio" name="data_inicio" id="data_inicio" type="date" class="form-control" placeholder="" aria-label="Jobs" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        termini
                        <input for="data_termino" name="data_termino" id="data_termino" type="date" class="form-control" placeholder="" aria-label="Jobs" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <button  type="adicionar" name="adicionar" class="add_item_btn">Adicionar a sua lista de candidaturas</button>
                    </div>
                    <div class="input-group mb-3">
                        <button  type="submit" name="submit" class="add_item_btn">Proximo Passo (Historico Profissional)</button>
                    </div>
                </div>
</form>