<?php 
//Definir namespaces : C'est un moyen stocker un élément afin qu'il n'y ai pas de double appel d'élément dans notre projet
// Definition use : Le use permet d'importer un élément via un alias
// definir query pdo statement
// prepare : les requêtes preparé servent à proteger les requêtes sql, permet de réutiliser les requêtes, executer plus rapidement les requetes et d'utiliser moins de ressource.
// execute : méthode qui va effecuté une boucle et appeler la méthode bindValue sur chacun des éléments d'un tableau
// bindparam : lie les données récuperer dans la bdd à variables, transmet et reçois la valeur de sortie.
namespace Controller;

use Model\Connect;
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

    public function viewCastingFilm()
    {
        require "view/list/film/viewCastingFilm.php";
    }
    
    public function viewAddFilm() {

        require "view/list/film/viewAddFilm.php";
    }


    public function addFilm() {

        if(isset($_POST['submit'])) {

            $titre = filter_input(INPUT_POST, "titre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $synopsis = filter_input(INPUT_POST, "synopsis", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $duree = filter_input(INPUT_POST, "duree", FILTER_SANITIZE_NUMBER_INT);

            if($titre && $date && $synopsis && $duree) {

                $sql = Connect::seConnecter();
                $stmt = $sql->prepare("INSERT INTO film (titre, date_sortie, synopsis, duree) VALUES (:titre, :date, :synopsis, :duree)");
                $stmt->bindParam(':titre' , $titre);
                $stmt->bindParam(':date', $date);
                $stmt->bindParam(':synopsis', $synopsis);
                $stmt->bindParam('duree', $duree);
                $stmt->execute(array(
                    ':titre' => $titre,
                    ':date' => $date,
                    ':synopsis' => $synopsis,
                    ':duree' => $duree
                ));
            }
        }
    }
}