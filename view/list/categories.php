<?php
ob_start();
?>

<h2>Catégories</h2>

<div class="row">
    <?php foreach($stmtAllCategories->fetchAll() as $categorie): ?>
    <div class="flex-wrap">
        <a href="index.php?action=categorieFilm&id=<?= $categorie['id_categorie'] ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?= $categorie['nom'] ?></a>
    </div>
    <?php endforeach; ?>
</div>


<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>