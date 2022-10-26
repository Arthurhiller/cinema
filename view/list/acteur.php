<?php
ob_start();
?>


<?php
foreach($stmtListActeur->fetchAll() as $unActeur): ?>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Date de naissance</th>
        </tr>
    </thead>
    <tbody>
        <td><?= $unActeur['nom'] ?></td>
        <td><?= $unActeur['prenom'] ?></td>
        <td><?= $unActeur['sexe'] ?></td>
        <td><?= $unActeur['date_naissance'] ?></td>
    </tbody>
</table>
<?php
endforeach;
?>


<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>