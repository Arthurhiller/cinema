<?php 
ob_start();
?>

<h2>Tous les réalisateurs</h2>


<div class="row">
    <?php foreach($stmtRealisateurs->fetchAll() as $realisateur): ?>
    <div class="flex-wrap">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title"><?= $realisateur['nom'] ?></h3>
                <h4 class="card-subtitle"><?= $realisateur['prenom'] ?></h4>
                <p class="card-text">
                    <p>Le sexe est : <?= $realisateur['sexe'] ?></p>
                    <p>La date de naissance : <?= $realisateur['date_naissance'] ?></p>
                </p>
                <a href="index.php?action=realisateurFilm&id=<?= $realisateur['id_realisateur'] ?>" class="btn btn-primary">Filmographie</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>




<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>