<?php

namespace Model\Manager;
use Model\Manager\ManagerInterface;

class ActeurManager extends AbstractManager implements ManagerInterface {

    public function findAll()
    {
        $sql = "SELECT * from acteur ORDER BY nom";
        $stmt = $this->executeRequest($sql);
        return $stmt;
    }

    public function findOneById($id)
    {
        $sql = "SELECT * from acteur WHERE id = :id";
        $stmt = $this->executeRequest($sql, ['id' => $id]);
        return $stmt;
    }

    public function acteursRole($id)
    {
       $sql = "SELECT a.nom,a.prenom,a.sexe,a.date_naissance, r.nom AS \"Nom du role\"
                FROM acteur a
                INNER JOIN casting c
                ON a.id_acteur = c.id_acteur
                INNER JOIN role 
                ON r.id_role = c.id_role
                WHERE id_role = :r.id_role";
        $stmt = $this->executeRequest($sql, [':r.id_role' => $id]);
        return $stmt;
    }
}