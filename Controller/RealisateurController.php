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

        require "view/list/realisateurs.php";
    }

    public function unRealisateur($id) {
        
        $stmtRealisateur = $this->manager->findOneById($id);
        require "view/list/realisateur.php";
    }

    public function realisateurFilm($id) {

        $sql = Connect::seConnecter();
        $stmt = $sql->query("SELECT f.titre, f.date_sortie, f.synopsis, f.duree
                            FROM realisateur r
                            INNER JOIN film f
                            ON r.id_realisateur = f.id_realisateur
                            WHERE r.id_realisateur = $id");
        require "view/list/realisateurFilm.php";
    }
}