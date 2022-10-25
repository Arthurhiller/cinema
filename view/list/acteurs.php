<?php
ob_start();
?>

<h2>Tous les acteurs</h2>
<div class="row">
    <?php foreach($stmtListActeurs->fetchall() as $acteur): ?>
    <div class="flex-wrap">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"> <?= $acteur['nom'] ?></h4>
                <h5 class="card-subtitle"><?= $acteur['prenom'] ?></h5>
                <p class="card-text">
                    <p>le sexe : <?= $acteur['sexe'] ?></p>
                    <p>la date de naissance de naissance : <?= $acteur['date_naissance'] ?></p>
                </p>
                <a href="index.php?action=unActeur&id=<?= $acteur['id_acteur'] ?>" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>