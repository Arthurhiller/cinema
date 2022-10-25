<?php
ob_start();
?>


<?php 
foreach($stmtOneFilm->fetchall() as $unFilm): ?>
<table>
    <thead>
        <tr>
            <th>titre</th>
            <th>date de sortie</th>
            <th>synopsis</th>
            <th>durée</th>
        </tr>
    </thead>
    <tbody>
        <td><?= $unFilm['titre'] ?></td>
        <td><?= $unFilm['date_sortie'] ?></td>
        <td><?= $unFilm['synopsis'] ?></td>
        <td><?= $unFilm['duree'] ?></td>
    </tbody>
</table>
<?php
endforeach;
?>


<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>