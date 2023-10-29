<?php
require '../../db/database.php';
if (isset($_GET['candidatoID'])) {
    $id = $_GET['candidatoID'];
}
echo '' . $id . '';
lingua($id);
?>
<h2>Formação</h2>
<form action="" method="post" class="row g-3 align-items-center">

    <div id="formacao">
        <div class="input-group mb-3">
            <h2>Língua</h2>
            <select name="nome_lingua" id="">
                <option value="Inglês">Inglês</option>
                <option value="Portugues">Portugues</option>
                <option value="Frânces">Frânces</option>
                <option value="Chinês">Chinês</option>
                <option value="Italiano">Italiano</option>
                <option value="Zulu">Zulu</option>
                <option value="Outra...">Outra...</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <input for="prof_falar" name="prof_falar" id="prof_falar" type="text" class="form-control" placeholder="Nível de fala" aria-label="Jobs" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input for="prof_ler" name="prof_ler" id="prof_ler" type="text" class="form-control" placeholder="Nível de leitura" aria-label="Jobs" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input for="prof_escrever" name="prof_escrever" id="prof_escrever" type="text" class="form-control" placeholder="Nível de Escrita" aria-label="Jobs" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <button type="adicionar" name="adicionar" class="add_item_btn">Adicionar a sua lista de Línguas</button>
        </div>
        <div class="input-group mb-3">
            <button type="submit" name="submit" class="add_item_btn">Finalizar candidatura</button>
        </div>
    </div>
</form>