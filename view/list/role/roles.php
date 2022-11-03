<?php
ob_start();
?>

<h2>Liste de tous les rôles</h2>

<a href="index.php?action=viewAddRole" class="btn btn-primary">Ajouter un role</a>

<div class="row">
    <?php foreach($stmtListRoles->fetchAll() as $role): ?>
        <div class="card col-xl-4" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"><?= $role['nom'] ?></h4>
                <a href="index.php?action=acteurRole&id=<?= $role['id_role'] ?>" class="btn btn-primary">Detail</a>
                <a href="index.php?action=deleteRole&id=<?= $role['id_role'] ?>" class="btn btn-danger">Supprimer</a>
                <a href="index.php?action=viewUpdate&id=<?= $role['id_role'] ?>" class=" btn btn-success">Editer</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>




<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>