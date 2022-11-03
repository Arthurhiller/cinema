<?php

namespace Controller;
use Model\Manager\ActeurManager;
use Model\Connect;

class ActeurController {

    private $manager;

    //  $role;

    //  public $role;

    public function __construct()
    {
        $this->manager = new ActeurManager;
    }

    public function listActeurs() {

        $stmtListActeurs = $this->manager->findAll();
        require "view/list/acteur/acteurs.php";
    }

    public function acteurFilm($id) {

        $sql = Connect::seConnecter();
        $stmt = $sql->query("SELECT f.titre, f.date_sortie, f.synopsis, f.duree
                            FROM acteur a
                            INNER JOIN casting c
                            ON c.id_acteur = a.id_acteur
                            INNER JOIN film f
                            ON c.id_film = f.id_film
                            WHERE a.id_acteur = $id");
        require "view/list/acteur/acteurFilm.php";
    }

    public function viewAddActeur() {

        require "view/list/acteur/viewAddActeur.php";
    }

    public function addActeur() {

        if(isset($_POST['submit'])) {

            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if($nom && $prenom && $sexe && $date) {

                $sql = Connect::seConnecter();
                $stmt = $sql->prepare("INSERT INTO acteur (nom, prenom, sexe, date_naissance) VALUES (:nom, :prenom, :sexe, :date)");
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':prenom', $prenom);
                $stmt->bindParam(':sexe', $sexe);
                $stmt->bindParam('date', $date);
                $stmt->execute(array(
                    ':nom' => $nom,
                    ':prenom' => $prenom,
                    ':sexe' => $sexe,
                    ':date' => $date
                ));
            }
        }
    }
}