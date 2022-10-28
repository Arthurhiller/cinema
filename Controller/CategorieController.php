<?php

namespace Controller;
use Model\Manager\CategorieManager;
use Model\Connect;
class categorieController {
    
    private $manager;

    public function __construct()
    {
        $this->manager = new CategorieManager;
    }

    public function listCategories() {

        $stmtAllCategories = $this->manager->findAll();
        require "view/list/categorie/categories.php";
    }

    public function categorieFilm($id) {

        $sql = Connect::seConnecter();
        $stmt = $sql->query("SELECT f.titre, f.date_sortie, f.synopsis, f.duree
                            FROM categorie c
                            INNER JOIN film f
                            ON f.id_categorie = c.id_categorie
                            WHERE c.id_categorie = $id");
        require "view/list/categorie/categorieFilm.php";

    }

    public function viewAddCategorie() {

        require "view/list/categorie/ajouterCategorie.php";
    }

    public function addCategorie() {

        if(isset($_POST['submit'])) {

            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if($nom) {

                $sql = Connect::seConnecter();
                $stmt = $sql->prepare("INSERT INTO categorie (nom) VALUES (:nom) ");
                $stmt->bindParam(':nom' , $nom);
                $stmt->execute(array(
                    ':nom' => $nom
                ));
            }
        }

    }

    public function deleteCategorie($id) {

        $sql = Connect::seConnecter();
        $stmt = $sql->prepare("DELETE FROM categorie WHERE id_categorie = :id");
        $stmt->bindParam(':id' , $id);
        $stmt->execute(array(
            ':id' => $id
        ));

    }

    public function viewUpdateCategorie() {

        require "view/list/categorie/updateCategorie.php";
    }

    public function updateCategorie($id) {

        if(isset($_POST['submit'])) {
            // die('succes');
            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            
            if($nom) {
                
                $sql = Connect::seConnecter();
                $stmt = $sql->prepare("UPDATE categorie SET nom=:nom WHERE id_categorie = $id");
                $stmt->bindParam(':nom' , $nom);
                $stmt->execute(array(
                    ':nom' => $nom
                ));
            }
        }
    }
}