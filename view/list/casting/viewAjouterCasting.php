<?php
ob_start();
$optionsRole = "";
?>


<form action="index.php?action=addCasting&id=<?= $_GET['id'] ?>" method="post">
    <div class="form">
        <div class="form-group-md-5">
            <label for="">Selectioner un acteur</label>
            <select name="acteur" class="form-control">
            <?php foreach($stmtActeurRoles->fetchAll() as $acteurRole): ?>
                <option value="<?= $acteurRole['id_acteur'] ?>" type="integer" ><?= $acteurRole['nom'] ?> <?= $acteurRole['prenom'] ?></option>
                <?php $optionsRole .= "<option value=".$acteurRole['id_role']." type=\"integer\" >".$acteurRole['role_nom'] ."</option>";
             endforeach; ?>
            </select>
        </div>
        <div class="form-group-md-5">
            <label for="">Selectioner un role</label>
            <select name="role" class="form-control">
                <?= $optionsRole ?>
            </select>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
</form>







<?php
$contenu = ob_get_clean();
require "./view/template.php";
?>