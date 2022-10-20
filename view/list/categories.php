<?php
ob_start();
?>

<h2>Catégories</h2>

<?php
foreach($stmtAllCategories->fetchall() as $categorie): ?>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>nom</td>
        </tr>
    </thead>
    <tbody>
        <td><?= $categorie['id_categorie'] ?></td>
        <td><?= $categorie['nom'] ?></td>
    </tbody>
</table>
<?php
endforeach;
?>

<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>