<?php

namespace App\Models;

use App\Utils\Database;
use PDO; // on utilise la classe PDO dont le namespace a été défini

class Brand extends CoreModel
{
    private $name;
    private $subtitle;
    private $picture;
    private $home_order; // ordre d'affichage des catégories dans la page accueil

    /**
     * Récupère toutes les brand (table brand) depuis la bdd
     * Retourne une liste d'objet (instances de la classe Brand => le model ou on est)
     */
    public function findAll()
    {
        $sql = "SELECT * FROM brand";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $brands = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Brand::class);

        return $brands;
    }

    /**
     * Récupère une seul brand en fonction de son id
     * Retourne un objet (une instance de la classe Brand => le model ou on est)
     */
    public function find($id)
    {
        // Ici on créer la requete SQL qui va récupérer le product en fonction de son id
        $sql = "SELECT * FROM brand WHERE id = ".$id;

        // Ici $pdo est un objet de la classe Databse (Utils/Database.php)
        // $pdo va me permettre d'executer mes requetes sql
        $pdo = Database::getPDO();

        // ici j'execute ma requete sql ($sql) et je stock le resultat de cette requete dans $pdoStatement
        $pdoStatement = $pdo->query($sql);

        // Je veux récuperer UN objet Product, PDO le fait pour moi => fetchObject (fetch qu'une seule fois + converti en objet de la classe 'Product' donc le model Product)
        $category = $pdoStatement->fetchObject(Category::class);

        return $category;
    }
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of name
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Get Picture
     *
     * @return void
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
    * Set the value of picture
    *
    * @return self
    */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
    * Get the value of home_order
    */ 
    public function getHome_order()
    {
        return $this->home_order;
    }

      /**
    * Set the value of home_order
    *
    * @return self
    */ 
    public function setHome_order($home_order)
    {
        $this->home_order = $home_order;
    }
}
