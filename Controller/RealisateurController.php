<?php

namespace Controller;
use Model\Manager\RealisateurManager;
use Model\Connect;

class RealisateurController {

    private $manager;

    public function __construct()
    {
        $this->manager = new RealisateurManager();
    }

    public function listRealisateur() {

        $stmtRealisateurs = $this->manager->findAll();

        require "view/list/realisateur/realisateurs.php";
    }

    public function realisateurFilm($id) {

        $sql = Connect::seConnecter();
        $stmt = $sql->query("SELECT f.titre, f.date_sortie, f.synopsis, f.duree
                            FROM realisateur r
                            INNER JOIN film f
                            ON r.id_realisateur = f.id_realisateur
                            WHERE r.id_realisateur = $id");
        require "view/list/realisateur/realisateurFilm.php";
    }

    public function viewAjouterRealisateur() {
        
        require "view/list/realisateur/ajouterRealisateur.php";
    }


    public function addRealisateur() {
        
        if(isset($_POST['submit'])) {

            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $date = filter_input(INPUT_POST, "date");
            // var_dump($_POST['submit']);
            // die("succes");
            if($nom && $prenom && $sexe && $date)
            {
                $sql = Connect::seConnecter();
                $stmt = $sql->prepare("INSERT INTO  realisateur (nom, prenom, sexe, date_naissance) VALUES (:nom, :prenom, :sexe, :date)");
                $stmt->bindParam(':nom' , $nom);
                $stmt->bindParam(':prenom', $prenom);
                $stmt->bindParam(':sexe', $sexe);
                $stmt->bindParam(':date_naissance' , $date);
                $stmt->execute(array(
                    ':nom' => $nom,
                    ':prenom' => $prenom,
                    'sexe' => $sexe,
                    ':date' => $date
                ));
            }
        }
        // require "view/list/realisateur/realisateurs.php";
    }

    public function deleteRealisateur($id) {
        
        $sql = Connect::seConnecter();
        $stmt = $sql->prepare("DELETE FROM realisateur WHERE id_realisateur = :id");
        $stmt->bindParam(':id' , $id);
        $stmt->execute(array(
            ':id' => $id
        ));
    }
}