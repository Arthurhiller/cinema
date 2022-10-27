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
        // Affichage de tous les films.
        case 'films': $ctrlFilm->listFilm();
        break;
        // Affichage de tous les réalisateurs.
        case 'realisateurs': $ctrlRealisateur->listRealisateur();
        break;
        // Affichage de tous les films d'un réalisateur.
        case 'realisateurFilm': $ctrlRealisateur->realisateurFilm($id);
        break;
        // realisateur->view form pour ajouter un réalisateur
        case 'ajouterRealisateur' : $ctrlRealisateur->viewAjouterRealisateur();
        break;
        case 'addrealisateur' : $ctrlRealisateur->addRealisateur();
        break;
        // Affichage de toutes les catégories.
        case 'categories': $ctrlCategories->listCategories();
        break;
        // Affichage de tous les films par catégorie
        case 'categorieFilm' : $ctrlCategories->categorieFilm($id);
        break;
        // Affichage de tous les acteurs.
        case 'acteurs' :  $ctrlActeurs->listActeurs();
        break;
        // Affiche tous films d'un acteur
        case 'acteurFilm' : $ctrlActeurs->acteurFilm($id);
        break;
        // Affichage d'un acteur est de son rôle.
        case 'acteurRole' : $ctrlRoles->listActeurRole($id);
        break;
        // Affichage de tous les roles.
        case 'roles' : $ctrlRoles->listRoles();
        break;
        // Affichage de tous les acteurs ainsi que leur rôle dans un film.
        case 'castingFilm' : $ctrlCasting->listCastingFilm($id);
        break;
    }
}else{
    // Si le case ne ce charge pas on retourne sur la homePage.
    return $ctrlHome->homePage();
}