<?php
ob_start();
?>

<h2>Role</h2>


<div class="row">
    <?php foreach($stmtListRoles->fetchall() as $role): ?>
    <div class="flex-wrap">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"><?= $role['nom'] ?></h4>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>




<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>