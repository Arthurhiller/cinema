<?php
/**
 * Définition ob_start()
 * "Demare la temporisation de sortie"
 * Empêche les données de transiter par l'URL
 */
ob_start();
?>

<h2>Liste des films</h2>


<div class="row">
<?php foreach($stmtAllFilms->fetchAll() as $film): ?>
    <div class="flex-wrap">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-muted text-truncate"><?= $film['titre'] ?></h5>
                <p class="card-text text-muted text-truncate"><?= $film['synopsis'] ?></p>
                <a href="index.php?action=castingFilm&id=<?= $film['id_film'] ?>" class="btn btn-primary">Voir le casting</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>


<?php
/**
 * Définition : ob_get_clean
 * Permet de lire le contenue du tampon de sortie courrant puis l'efface. 
 */
$contenu = ob_get_clean();
require "./view/template.php";
?>