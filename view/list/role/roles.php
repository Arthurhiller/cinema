<?php
ob_start();
?>

<h2>Liste de tous les rôles</h2>


<div class="row">
    <?php foreach($stmtListRoles->fetchAll() as $role): ?>
    <div class="flex-wrap">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"><?= $role['nom'] ?></h4>
                <a href="index.php?action=acteurRole&id=<?= $role['id_role'] ?>" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>




<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>