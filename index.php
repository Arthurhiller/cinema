<?php
namespace App;
use Controller\HomeController;
use Controller\FilmController;
use Controller\RealisateurController;
use Controller\categorieController;
use Controller\ActeurController;
use Controller\RoleController;
use Controller\CastingController;


spl_autoload_register(function($class_name){
    include $class_name.".php";
});

$ctrlHome = new HomeController();
$ctrlFilm = new FilmController();
$ctrlRealisateur = new RealisateurController();
$ctrlCategories = new categorieController();
$ctrlActeurs = new ActeurController();
$ctrlRoles = new RoleController();
$ctrlCasting = new CastingController();


//  var_dump($ctrlActeurs(ListActeursRoles(17)));


if(isset($_GET['action'])) {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    switch($_GET['action']) {
        case 'films': $ctrlFilm->listFilm();
        break;
        case 'unFilm' : $ctrlFilm->unFilm($id);
        break;
        case 'realisateurs': $ctrlRealisateur->listRealisateur();
        break;
        case 'categories': $ctrlCategories->listCategories();
        break;
        case 'acteurs' :  $ctrlActeurs->listActeurs();
        break;
        // case 'acteursRole': $ctrlActeurs->ListActeursRoles($id);
        break;
        case 'roles' : $ctrlRoles->listRoles();
        break;
        case 'castings' : $ctrlCasting->listCasting();
        break;
    }

    
    



}else{
    return $ctrlHome->homePage();
}