<?php 
ob_start();
?>

<h2>Liste de tous les réalisateurs</h2>

<a href="index.php?action=ajouterRealisateur" class="btn btn-primary">Ajouter un realisateur</a>

<div class="row">
    <?php foreach($stmtRealisateurs->fetchAll() as $realisateur): ?>
        <div class="card col-xl-4" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title"><?= $realisateur['nom'] ?></h3>
                <h4 class="card-subtitle"><?= $realisateur['prenom'] ?></h4>
                <p class="card-text">
                    <p>Le sexe est : <?= $realisateur['sexe'] ?></p>
                    <p>La date de naissance : <?= $realisateur['date_naissance'] ?></p>
                </p>
                <a href="index.php?action=realisateurFilm&id=<?= $realisateur['id_realisateur'] ?>" class="btn btn-primary">Filmographie</a>
                <a href="index.php?action=deleteRealisateur&id=<?= $realisateur['id_realisateur'] ?>" class="btn btn-danger">Supprimer</a>
                <a href="index.php?action=viewUpdateRealisateur&id=<?= $realisateur['id_realisateur'] ?>" class="btn btn-success">Editer</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>




<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>