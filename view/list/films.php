<?php
/**
 * Définition ob_start()
 * "Demare la temporisation de sortie"
 * Empêche les données de transiter par l'URL
 */
ob_start();
?>

<h2>Liste des films</h2>

<?php
// foreach($request as $info)
// var_dump($stmtAllFilms);

foreach($stmtAllFilms->fetchall() as $film): ?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Date de sortie</th>
            <th>Synopsis</th>
            <th>Durée</th>
        </tr>
    </thead>
    <tbody>
        <td><a href="index.php?action=unFilm&id=<?= $film['id_film'] ?>">Ici</td>
        <td><?=$film['titre']?></td>
        <td><?=$film['date_sortie']?></td>
        <td><?=$film['synopsis']?></td>
        <td><?=$film['duree']?></td>
    </tbody>
</table>
<?php
endforeach;
?>
<?php
/**
 * Définition : ob_get_clean
 * Permet de lire le contenue du tampon de sortie courrant puis l'efface. 
 */
$contenu = ob_get_clean();
require "./view/template.php";
?>