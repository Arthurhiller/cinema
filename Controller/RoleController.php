<?php

namespace Controller;
use Model\Manager\RoleManager;

class RoleController {

    private $manager;

    public function __construct()
    {
        $this->manager = new RoleManager;
    }

    public function listRoles() {

        $stmtListRoles = $this->manager->findAll();
        require "view/list/roles.php";
    }
}