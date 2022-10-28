<?php
ob_start();
?>

<h2>Liste de toutes les catégories</h2>

<a href="index.php?action=viewAddCategorie">Ajouter une catégorie</a>

<div class="row">
    <?php foreach($stmtAllCategories->fetchAll() as $categorie): ?>
    <div class="flex-wrap">
        <div class="card" style="width:18rem">
            <div class="card-body">
                <a href="index.php?action=categorieFilm&id=<?= $categorie['id_categorie'] ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?= $categorie['nom'] ?></a>
                <a href="index.php?action=deleteCategorie&id=<?= $categorie['id_categorie'] ?>" class="btn btn-danger">Supprimer</a>
                <a href="index.php?action=viewUpdateCategorie&id=<?= $categorie['id_categorie'] ?>" class="btn btn-info">Modifier</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>


<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>