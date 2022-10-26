<?php

namespace Model\Manager;
use Model\Manager\ManagerInterface;

class CinemaManager extends AbstractManager implements ManagerInterface {

    

    public function findAll() {
        
        $sql = "SELECT * FROM film ORDER BY titre";
        $stmt = $this->executeRequest($sql);
        return $stmt;
    }

    public function findOneById($id)
    {
        $sql = "SELECT * FROM film WHERE id_film = :id";
        $stmt = $this->executeRequest($sql, ['id' => $id ]);
        return $stmt;
    }


}