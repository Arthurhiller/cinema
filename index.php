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
        // Ajouter un realisateur
        case 'addRealisateur' : $ctrlRealisateur->addRealisateur();
        break;
        // Supprimer un réalisateur
        case 'deleteRealisateur' : $ctrlRealisateur->deleteRealisateur($id);
        break;
        // view vers le formulaire pour update un réalisateur
        case 'viewUpdateRealisateur' : $ctrlRealisateur->viewFormulaireUpdate($id);
        break;
        // Modifier un réalisateur
        case 'updateRealisateur' : $ctrlRealisateur->updateRealisateur($id);
        break;
        // Affichage de toutes les catégories.
        case 'categories': $ctrlCategories->listCategories();
        break;
        // Affichage de tous les films par catégorie
        case 'categorieFilm' : $ctrlCategories->categorieFilm($id);
        break;
        // view vers le formulaire add catégorie
        case 'viewAddCategorie' : $ctrlCategories->viewAddCategorie();
        break;
        // Ajouter une nouvelle catégorie
        case 'addCategorie' : $ctrlCategories->addCategorie();
        break;
        case 'viewUpdateCategorie' : $ctrlCategories->viewUpdateCategorie($id);
        break;
        case 'updateCategorie' : $ctrlCategories->updateCategorie($id);
        break;
        // Supprime une catégorie
        case 'deleteCategorie' : $ctrlCategories->deleteCategorie($id);
        break;
        // Affichage de tous les acteurs.
        case 'acteurs' :  $ctrlActeurs->listActeurs();
        break;
        // view add acteur
        case 'viewAddActeur' : $ctrlActeurs->viewAddActeur();
        break;
        // ajouter un acteur
        case 'addActeur' : $ctrlActeurs->addActeur();
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
        // View add role (formulaire)
        case 'viewAddRole' : $ctrlRoles->viewAddRole();
        break;
        // add role function
        case 'addRole' : $ctrlRoles->addRole();
        break;
        // delete role function
        case 'deleteRole' : $ctrlRoles->deleteRole($id);
        break;
        // View update role
        case 'viewUpdate' : $ctrlRoles->viewUpdate($id);
        break;
        case 'updateRole' : $ctrlRoles->updateRole($id);
        break;
        // Affichage de tous les acteurs ainsi que leur rôle dans un film.
        case 'castingFilm' : $ctrlCasting->listCastingFilm($id);
        break;
    }
}else{
    // Si le case ne ce charge pas on retourne sur la homePage.
    return $ctrlHome->homePage();
}