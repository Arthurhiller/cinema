<?php 
ob_start();
?>

<h2>Tous les réalisateurs</h2>

<?php
foreach($stmtRealisateurs->fetchall() as $realisateur): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>nom</th>
                <th>prenom</th>
                <th>sexe</th>
                <th>Date de naissance</th>
            </tr>
        </thead>
        <tbody>
            <td><a href="index.php?action=unRealisateur&id=<?= $realisateur['id_realisateur'] ?>">ICI</a></td>
            <td><?=$realisateur['nom']?></td>
            <td><?=$realisateur['prenom']?></td>
            <td><?=$realisateur['sexe']?></td>
            <td><?=$realisateur['date_naissance']?></td>
        </tbody>
    </table>
<?php    
endforeach;
    
?>



<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>