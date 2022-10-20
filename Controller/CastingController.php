<?php

namespace Controller;
use Model\Manager\CastingManager;

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
}