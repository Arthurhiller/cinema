<?php

namespace Model\Manager;
use Model\Manager\ManagerInterface;

class RealisateurManager extends AbstractManager implements ManagerInterface {


    /**
     * Function findAll() -> récupère tous les réalisateur
     */
    public function findAll()
    {   
        //Requête sql stocké dans une variable $sql pour récupéré tous les réalisateur et les tries par le nom
        $sql = "SELECT * FROM realisateur ORDER BY nom";
        // Déclare la requête et on retourne l'object sur lequel on appelle la fonction executeRequest avec comme paramètre notre varible $sql
        $stmt = $this->executeRequest($sql);
        // Retourne la varible stmt (statement)
        return $stmt;

    }
    /**
     * Function FundOneById($id) -> récupère seulement l'élément dont l'id correspond
     */
    public function findOneById($id)
    {
        $sql = "SELECT * FROM realisateur WHERE id_realisateur = :id";
        $stmt = $this->executeRequest($sql, ['id' => $id]);
        return $stmt;
    }

    
}