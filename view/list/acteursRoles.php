<?php
ob_start()
?>
<?php
foreach($stmtListActeurRoles->fetchAll() as $acteurRole): ?>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>prenom</th>
        <th>sexe</th>
        <th>date_naissance</th>
        <th>Nom du role</th>
    </tr>
    </thead>
    <tbody>
        <td><?= $acteurRole['nom'] ?></td>
        <td><?= $acteurRole['prenom'] ?></td>
        <td><?= $acteurRole['sexe'] ?></td>
        <td><?= $acteurRole['date_naissance'] ?></td>
        <?= $acteurRole['r.nom'] ?>
        <td></td>
    </tbody>
</table>


<?php
endforeach;
?>




<?php
$continu = ob_get_clean();
require "view/template.php";
?>