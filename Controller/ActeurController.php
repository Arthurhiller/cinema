<?php

namespace Controller;
use Model\Manager\ActeurManager;

class ActeurController {

    private $manager;

    public function __construct()
    {
        $this->manager = new ActeurManager;
    }

    public function listActeurs() {

        $stmtListActeurs = $this->manager->findAll();
        require "view/list/acteurs.php";
    }


}