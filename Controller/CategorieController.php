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
        require "view/list/categories.php";
    }

    public function categorieFilm($id) {

        $sql = Connect::seConnecter();
        $stmt = $sql->query("SELECT f.titre, f.date_sortie, f.synopsis, f.duree
                            FROM categorie c
                            INNER JOIN film f
                            ON f.id_categorie = c.id_categorie
                            WHERE c.id_categorie = $id");
        require "view/list/categorieFilm.php";

    }
}