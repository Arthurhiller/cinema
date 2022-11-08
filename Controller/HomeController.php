<?php

namespace Controller;

use Model\Connect;

// require_once "view/homePage.php";

/**
 * Définition PHP Data Objects (PDO) :
 * C'est une classe qui constitue une couche d'abstraction qui intervient entre l'application PHP
 * et un systhème de gestion de base de données (SGDB).
 * Le plus : cela facilite la migration vers un autre systhème de gestion de base de données (SGDB).
 */
/**
 * Définition SGDB : 
 * Un Systhème de gestion de base de données est un logiciel systhème servant à stocker/manipuler
 * ou gérer et partager des données dans une base de données.
 * Le plus : cela permet la garantie, la pérennité et la confidentialité des informations.
 */
/**
 * Définition query() : 
 * Méthode qui permet l'envoie d'une requête à un serveur MySQL.
 */
/**
 * Définition méthode fetch()
 * Méthode qui permet de récupérer un résultat dans une table associative associer à un object issu de PDO
 */
/**
 * Définition requête preparé/EN : prepared statement
 * C'est une fonctionnalité que proposent certaines base de données et qui permet d'exécuter
 * de façons performante la même requête ou des requêtes très similaires. La requête fonctionne
 * en 3 étapes :
 * 1)Lors de la préparation la requête est écrite et les valeurs à remplacer sont substitué par
 * un marqueur (soit : soit ?).
 * 2)La compilation qui est réalisé par la machine.
 * 3)L'execution, les valeurs vont être inserrées dans la requête à la place marqueurs puis pourra
 * être effectué.
 * Le plus :  Empêche les injections de type SQL (les données sont isolé).
 *            Limite la bande passante entre le client et le serveur.
 *            Permet plus de rapidité car elle consomme moins de ressource (Optimisation pour le SEO).
 */
/**
 * Définition Design Pattern/Patron de conception
 * Modèle de référence qui sert de source d'inspiration à la conception
 * Le plus : respecter des méthodes de conception professionnellement reconnues.
 *           Développer plus rapidement en suivant un modèle.
 *           Permettre au code d'être relu plus facilement par un autre développeur.
 */
/**
 * Définition MVC
 * C'est un design pattern crée par Trygve Reenskaug en 1978
 * Une application conforme au motif MVC comporte 3 types de modules
 * 
 * -Le modèle : C'est la couche métier de l'application suite à une action d'un utilisateur le modèle va récuperer les données demandé
 * par le controleur, effectue la récupération puis traite ou transmet le ou les résultats.
 * 
 * -La vue : Permet de présenter l'information visuellement mais aussi d'interagir avec (exemple un bouton)
 * 
 * -Le controller : synchroniser les vues avec les modèles :  controle des données et des paramètres passés, gestion des évènements...
 *  c'est le premier acteur atteint par la demande de l'utiliateur (bouton de deconnexion -> méthode -> vérifie le droit de utilisateur -> transmet l'information au modèle )
 *  
 */

class HomeController {



    public function homePage() {
        
        $sql = Connect::seConnecter();
        $stmtFilmHomes = $sql->query("SELECT titre, date_sortie, synopsis, duree FROM film");
        $stmtFilmHomes->execute();
        require "view/homePage.php";

    }

}