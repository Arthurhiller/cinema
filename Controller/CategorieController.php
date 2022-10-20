<?php

namespace Controller;
use Model\Manager\CategorieManager;

class categorieController {
    private $manager;

    public function __construct()
    {
        $this->manager = new CategorieManager;
    }

    public function listCategories() {

        $stmtAllCategories = $this->manager->findAll();
        require "view/list/categories.php";
    }
}