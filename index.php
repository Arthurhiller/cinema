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
// var_dump($ctrlFilm);


if(isset($_GET['action'])) {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    switch($_GET['action']) {
        case 'films': $ctrlFilm->listFilm();
        break;
        case 'realisateurs': $ctrlRealisateur->listRealisateur();
        break;
        case 'categories': $ctrlCategories->listCategories();
        break;
        case 'acteurs' :  $ctrlActeurs->listActeurs();
        break;
        case 'roles' : $ctrlRoles->listRoles();
        break;
        case 'castings' : $ctrlCasting->listCasting();
    }

    
    



}else{
    return $ctrlHome->homePage();
}