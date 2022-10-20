<?php
ob_start();
?>

<h2>Role</h2>

<?php
foreach($stmtListRoles->fetchall() as $role): ?>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>nom</th>
    </tr>
    </thead>
    <tbody>
        <td><?= $role['id_role'] ?></td>
        <td><?= $role['nom'] ?></td>
    </tbody>
</table>
<?php
endforeach;
?>




<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>