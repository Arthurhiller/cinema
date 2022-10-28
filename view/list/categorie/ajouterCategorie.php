<?php
ob_start();
?>


<p>Ajouter une catégorie</p>
<form action="index.php?action=addCategorie" method="post">
    <div class="form">
        <div class="form-groupe-md-5">
            <label for="">Nom</label>
            <input type="text" class="form-controle" name="nom">
        </div>
    <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
</form>















<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>