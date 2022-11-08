<?php
ob_start();
?>

<p>Editer un film</p>
<form action="index.php?action=editFilm&id=<?= $_GET['id'] ?>" method="post">
    <div class="form">
        <div class="form-groupe-md-5">
            <label for="">Titre</label>
            <input type="text" class="form-controle" name="titre">
        </div>
        <div class="form groupe-md-5">
            <label for="">Date de sortie</label>
            <input type="date" class="form-controle" name="date">
        </div>
        <div class="form-group">
            <label for="">Synopsis</label>
            <textarea class="form-control" type="text" name="synopsis" rows="3"></textarea>
        </div>
        <div class="form groupe-md-5">
            <label for="">Durée</label>
            <input type="integer" name="duree">
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
</form>


<?php
$contenu = ob_get_clean();
require "./view/template.php";