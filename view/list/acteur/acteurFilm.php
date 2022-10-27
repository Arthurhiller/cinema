<?php
ob_start();
?>


<div class="row">
    <?php foreach($stmt->fetchAll() as $acteurFilm): ?>
    <div class="flex-wrap">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"><?= $acteurFilm['titre'] ?></h4>
                <p class="card-text">La date de sortie est <?= $acteurFilm['date_sortie'] ?></p>
                <p class="card-text text-truncate">La synopsis du film est : <?= $acteurFilm['synopsis'] ?></p>
                <p class="card-text">La durée du film est <?= $acteurFilm['duree'] ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>








<?php
$contenu = ob_get_clean();
require "./view/template.php";