<?php 

namespace Model\Manager;
use Model\Manager\ManagerInterface;

class CastingManager extends AbstractManager implements ManagerInterface {

    public function findAll()
    {
        $sql = "SELECT * FROM casting ORDER BY id_casting";
        $stmt = $this->executeRequest($sql);
        return $stmt;
    }

    public function findOneById($id)
    {
        $sql = "SELECT * FROM casting WHERE id = :id";
        $stmt = $this->executeRequest($sql, ['id' => $id]);
        return $stmt;
    }
}