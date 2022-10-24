<?php

namespace Controller;
use Model\Manager\ActeurManager;

class ActeurController {

    private $manager;

    //  $role;

     public $role;

    public function __construct()
    {
        $this->manager = new ActeurManager;
    }

    public function listActeurs() {

        $stmtListActeurs = $this->manager->findAll();
        require "view/list/acteurs.php";
    }


    // public function ListActeursRoles($id) {
        
    //     $stmtListActeurRoles = $this->acteursRole($id);
    //     require "view/list/acteursRoles.php";
    // }



}