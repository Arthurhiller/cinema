<?php

namespace Controller;
use Model\Manager\CastingManager;
use Model\Connect;
class CastingController {
    
    private $manager;

    public function __construct()
    {
        $this->manager = new CastingManager();
    }

    public function listCasting() {

        $stmtListCasting = $this->manager->findAll();
        require "view/list/casting.php";
    }

    public function listCastingFilm($id)
    {
        $sql = Connect::seConnecter();
        $stmt = $sql->query("SELECT a.nom, a.prenom, r.nom AS \"role_nom\"
                            FROM casting c
                            INNER JOIN acteur a
                            ON c.id_acteur = a.id_acteur
                            INNER JOIN role r
                            ON r.id_role = c.id_role
                            WHERE id_film = $id");
        require "view/list/filmCasting.php";
    }
}