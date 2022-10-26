<?php

namespace Model\Manager;
use Model\Manager\ManagerInterface;

class RoleManager extends AbstractManager implements ManagerInterface {

    public function findAll()
    {
        $sql = "SELECT * FROM role ORDER BY nom";
        $stmt = $this->executeRequest($sql);
        return $stmt;
    }

    public function findOneById($id)
    {
        $sql = "SELECT * FROM role WHERE id = :id";
        $stmt = $this->executeRequest($sql, ['id' => $id]);
        return $stmt;
    }

    // public function listActeurRole($id)
    // {  
    //     $sql = "SELECT a.nom
    //             FROM role r
    //             INNER JOIN casting c
    //             ON r.id_role = c.id_role
    //             INNER JOIN acteur a
    //             ON a.id_acteur = c.id_acteur
    //             WHERE r.id_role = :c.id_role";
    //     $stmt = $this->executeRequest($sql, ['c.id_role' => $id]);
    //     return $stmt;
    // }
}