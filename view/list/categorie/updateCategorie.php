<?php
ob_start();
?>


<p>Modifier une catégorie</p>
<form action="index.php?action=updateCategorie&id=<?= $_GET['id'] ?>" method="post">
    <div class="form">
        <div class="form-groupe-md-5">
            <label for="">Nom</label>
            <input type="text" class="form-controle" name="nom">
        </div>
    <button type="submit" name="submit" class="btn btn-primary">Modifier</button>
</form>







<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>