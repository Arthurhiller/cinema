<?php
ob_start();
?>

<div class="row">
    <?php foreach($stmt->fetchAll() as $castingFilm): ?>
    <div class="flex-wrap">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div class="card-title">
                    <h4><?= $castingFilm['nom'] ?></h4>
                    <h5><?= $castingFilm['prenom'] ?></h5>
                </div>
                <p class="card-text"> Son rôle est <?= $castingFilm['role_nom'] ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>






<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>