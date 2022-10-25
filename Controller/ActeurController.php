<?php

namespace Controller;
use Model\Manager\ActeurManager;

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
        require "view/list/acteurs.php";
    }


    public function listActeur($id) {

        $stmtListActeur = $this->manager->findOneById($id);
        require "view/list/acteur.php";
    }

}