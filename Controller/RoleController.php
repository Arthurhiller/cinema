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

    public function viewAddRole() {

        require "view/list/role/addRole.php";
    }

    public function addRole() {


        if(isset($_POST['submit'])) {

            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if($nom) {

                $sql = Connect::seConnecter();
                $stmt = $sql->prepare("INSERT INTO role (nom) VALUES (:nom)");
                $stmt->bindParam(':nom' , $nom);
                $stmt->execute(array(
                    ':nom' => $nom
                ));
            }
        }
    }

    public function deleteRole($id) {

        $sql = Connect::seConnecter();
        $stmt = $sql->prepare("DELETE FROM role WHERE id_role = :id");
        $stmt->bindParam(':id' , $id);
        $stmt->execute(array(
            ':id' => $id
        ));
    }

    public function viewUpdate() {

        require "view/list/role/viewUpdate.php";
    }

    public function updateRole($id) {

        if(isset($_POST['submit'])) {

            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if($nom) {

                $sql = Connect::seConnecter();
                $stmt = $sql->prepare("UPDATE role SET nom=:nom WHERE id_role= $id");
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':id', $id);
                $stmt->execute(array(
                    ':nom' => $nom,
                ));
            }
        }
    }
}