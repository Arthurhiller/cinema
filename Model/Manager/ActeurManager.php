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
}