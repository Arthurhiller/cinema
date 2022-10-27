<?php 
//Definir namespaces : C'est un moyen stocker un élément afin qu'il n'y ai pas de double appel d'élément dans notre projet
// Definition use : Le use permet d'importer un élément via un alias
// definir query pdo statement
// prepare : les requêtes preparé servent à proteger les requêtes sql, permet de réutiliser les requêtes, executer plus rapidement les requetes et d'utiliser moins de ressource.
// execute : méthode qui va effecuté une boucle et appeler la méthode bindValue sur chacun des éléments d'un tableau
// bindparam : lie les données récuperer dans la bdd à variables, transmet et reçois la valeur de sortie.
namespace Controller;
use Model\Manager\CinemaManager;


class FilmController {

    private $manager;

    public function __construct()
    {
        $this->manager = new CinemaManager();
    }

    public function listFilm() {

        // definir query pdo statement
        // prepare : les requêtes preparé servent à proteger les requêtes sql, permet de réutiliser les requêtes, executer plus rapidement les requetes et d'utiliser moins de ressource.
        // execute : méthode qui va effecuté une boucle et appeler la méthode bindValue sur chacun des éléments d'un tableau
        // bindparam : lie les données récuperer dans la bdd à variables, transmet et reçois la valeur de sortie.
        $stmtAllFilms = $this->manager->findAll();

        require "view/list/film/films.php";
    }
    
}