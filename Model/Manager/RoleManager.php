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
}