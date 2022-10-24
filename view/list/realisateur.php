<?php
ob_start();
?>

<?php
foreach($stmtRealisateur->fetchall() as $unRealisateur): ?>
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
        <td><?= $unRealisateur['nom'] ?></td>
        <td><?= $unRealisateur['prenom'] ?></td>
        <td><?= $unRealisateur['sexe'] ?></td>
        <td><?= $unRealisateur['date_naissance'] ?></td>
    </tbody>
</table>
<?php
endforeach;
?>





<?php 
$contenu = ob_get_clean();
require "./view/template.php";
?>