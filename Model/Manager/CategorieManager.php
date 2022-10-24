<?php

namespace Model\Manager;
use Model\Manager\ManagerInterface;

class CategorieManager extends AbstractManager implements ManagerInterface {


    public function findAll()
    {
        $sql = "SELECT * FROM categorie ORDER BY nom";
        $stmt = $this->executeRequest($sql);
        return $stmt;
    }

    public function findOneById($id)
    {
        $sql = "SELECT * FROM categorie WHERE id = :id";
        $stmt = $this->executeRequest($sql, ['id' => $id]);
        return $stmt;
    }
    
}