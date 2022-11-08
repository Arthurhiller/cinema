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
        require "view/list/casting/filmCasting.php";
    }


    public function viewAjouterCasting($id) {

        $sql = Connect::seConnecter();
        $stmtActeurRoles = $sql->query("SELECT a.id_acteur, a.nom, a.prenom, r.id_role, r.nom AS \"role_nom\"
                            FROM casting c
                            INNER JOIN acteur a
                            ON c.id_acteur = a.id_acteur
                            INNER JOIN role r
                            ON c.id_role = r.id_role");
        require "view/list/casting/viewAjouterCasting.php";
    }


    public function addCasting($id) {

        
        if(isset($_POST['submit'])) {

            $acteur = filter_input(INPUT_POST, "acteur", FILTER_SANITIZE_NUMBER_INT);
            $role = filter_input(INPUT_POST, "role", FILTER_SANITIZE_NUMBER_INT);
            // var_dump($_POST);
            if($acteur && $role) {

                $sql = Connect::seConnecter();
                $stmt = $sql->prepare("INSERT INTO casting (id_film, id_acteur, id_role) VALUES ($id, :acteur, :role)");
                $stmt->bindParam(':acteur' , $acteur);
                $stmt->bindParam(':role', $role);
                $stmt->execute(array(
                    ':acteur' => $acteur,
                    ':role' => $role
                ));
            }
        }

    }
}