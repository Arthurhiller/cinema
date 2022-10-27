<?php

namespace Controller;
use Model\Manager\RoleManager;
use Model\Connect;

class RoleController {

    private $manager;

    public function __construct()
    {
        $this->manager = new RoleManager;
    }

    public function listRoles() {

        $stmtListRoles = $this->manager->findAll();
        require "view/list/role/roles.php";
    }

    public function listActeurRole($id)
    {  
        $sql = Connect::seConnecter();
        $stmt = $sql->query("SELECT a.nom, a.prenom, a.sexe, a.date_naissance
        FROM role r
        INNER JOIN casting c
        ON r.id_role = c.id_role
        INNER JOIN acteur a
        ON a.id_acteur = c.id_acteur
        WHERE r.id_role = $id");
        require "view/list/role/acteursRoles.php";
    }

    // public function acteurRole($id) {

    //     $new = new RoleManager();
    //     $stmtActeurRole = $this->new->listActeurRole($id);
    //     require "view/list/acteursRoles.php";
    // }
}