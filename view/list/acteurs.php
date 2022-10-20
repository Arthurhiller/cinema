<?php
ob_start()
?>

<h2>Acteurs</h2>
<?php
foreach($stmtListActeurs->fetchall() as $acteur): ?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>nom</th>
        </tr>
    </thead>
    <tbody>
        <td><?= $acteur['id_acteur'] ?></td>
        <td><?= $acteur['nom'] ?></td>
    </tbody>
</table>
<?php
endforeach;
?>









<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>