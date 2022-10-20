<?php
ob_start();
?>


<h2>Casting</h2>




<?php 
$contenu = ob_get_clean();
require "./view/template.php";
?>