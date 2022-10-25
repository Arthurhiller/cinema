<?php
ob_start();
?>

<h2>Acteurs</h2>
<?php
foreach($stmtListActeurs->fetchall() as $acteur): ?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Date de naissance</th>
        </tr>
    </thead>
    <tbody>
        <td><a href="index.php?action=unActeur&id=<?= $acteur['id_acteur'] ?>">ICI</a></td>
        <td><?= $acteur['nom'] ?></td>
        <td><?= $acteur['prenom'] ?></td>
        <td><?= $acteur['sexe'] ?></td>
        <td><?= $acteur['date_naissance'] ?></td>
    </tbody>
</table>
<?php
endforeach;
?>


<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>