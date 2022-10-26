<?php

namespace Model\Manager;
use Model\Manager\ManagerInterface;

class ActeurManager extends AbstractManager implements ManagerInterface {

    public function findAll()
    {
        $sql = "SELECT * FROM acteur ORDER BY nom";
        $stmt = $this->executeRequest($sql);
        return $stmt;
    }

    public function findOneById($id)
    {
        $sql = "SELECT * FROM acteur WHERE id_acteur = :id";
        $stmt = $this->executeRequest($sql, ['id' => $id]);
        return $stmt;
    }

}