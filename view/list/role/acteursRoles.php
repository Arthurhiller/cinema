<?php
ob_start()
?>
<div class="row">
    <?php foreach($stmt->fetchAll() as $acteurRole): ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"><?= $acteurRole['nom'] ?></h4>
                <h5 class="card-subtitle"><?= $acteurRole['prenom'] ?></h5>
                <p class="card-text">Le sexe de l'acteur est : <?= $acteurRole['sexe'] ?></p>
                <p class="card-text">La date de naissance de l'acteur est : <?= $acteurRole['date_naissance'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>




<?php
$contenu = ob_get_clean();
require "view/template.php";
?>