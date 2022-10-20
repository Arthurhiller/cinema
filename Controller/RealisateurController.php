<?php

namespace Controller;
use Model\Manager\RealisateurManager;

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
}