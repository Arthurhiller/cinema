<?php
ob_start();
?>


<p>Modifier un acteur</p>

<form action="index.php?action=updateActeur&id=<?= $_GET['id'] ?>" method="post">
    <div class="form">
        <div class="form-groupe-md-5">
            <label for="">Nom</label>
            <input type="text" class="form-controle" name="nom">
        </div>
        <div class="form groupe-md-5">
            <label for="">Prenom</label>
            <input type="text" class="form-controle" name="prenom">
        </div>
        <div class="form groupe-md-5">
            <label for="form-group-md-5">Sexe</label>
            <input type="texte" class="form-controle" name="sexe">
        </div>
        <div class="form groupe-md-5">
            <label for="">Date de naissance</label>
            <input type="date" name="date">
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
</form>







<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>