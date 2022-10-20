<?php

namespace Model;
// Définition PDO : 
abstract class Connect{
    
    public static function seConnecter(){
        
        try {
            $bdd = new \PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');
        } catch (\PDOException $error) {
            return $error->getMessage();
        }
        return $bdd;
        
    }
    function getBDD(){
        return $this->bdd;
    }
    public function executeRequest($sql, $params = NULL){
        if ($params == NULL){
            $resultat = $this->bdd->query($sql);
        }else{
            $resultat = $this->bdd->prepare($sql); 
            $resultat->execute($params);
        }
        return $resultat;
    }
}