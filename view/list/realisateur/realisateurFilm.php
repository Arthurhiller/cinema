<?php
ob_start();
?>

<div class="row">
    <?php foreach($stmt->fetchAll() as $realisateurFilm): ?>
    <div class="flex-wrap">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $realisateurFilm['titre'] ?></h5>
                <p class="card-text">La date de sortie du film est :  <?= $realisateurFilm['date_sortie'] ?></p>
                <p class="card-text text-truncate">La synopsis du film est : <?= $realisateurFilm['synopsis'] ?></p>
                <p class="card-text">La duréee du film est : <?= $realisateurFilm['duree'] ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>


<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>