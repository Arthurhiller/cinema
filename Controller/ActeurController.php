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

}