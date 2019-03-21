<?php

namespace model;

class EntityRepository
{
    private $db;
    public $table;
    public function getDb() // méthode permettant d'instancier la classe PDO et de créer un objet
    {
        if(!$this->db) // seulement si $this->db n'est pas remplie, si il n'y a pas de connexion, alors on la construit
        {
            try 
            {
                $this->db = new \PDO('mysql:host=localhost; dbname=site_portfolio', 'root', '', array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
            }
            catch(\PDOException $e) // on entre ici en cas de mauvaise connexion à la BDD
            {
                die("La connexion à la base de données a échoué : " . $e->getMessage());
            }
        }
        return $this->db; // on retourne la connexion
    }

    // public function getFields() // méthode permettant de recolter les données des champs/colonnes de la table
    // {
    //     $q = $this->getDb()->query("DESC " . $this->table); // DESC : description de la table
    //     $r = $q->fetchALL(\PDO::FETCH_ASSOC);
    //     return array_splice($r, 1); // permet de ne pas récupérer le premier champs idEmploye dans le formulaire, dans la BDD grace à la fonction prédéfinie array_splice()
    // }

    // public function selectAll()
    // {
    //     $q = $this->getDb()->query("SELECT * FROM " . $this->table); // requete permettant de selectionner toute une table, $this->table : représente dans notre cas la table 'employe'
    //     $r = $q->fetchAll(\PDO::FETCH_ASSOC);
    //     return $r;
    // }

    // public function save()
    // {
    //     $id = isset($_GET['id']) ? $_GET['id'] : 'NULL';

    //     if(!empty($_FILES['avatar']['name'])){
    //         $nom_photo = uniqid() . '-' . $_FILES['avatar']['name'];

    //         $photoBdd = "http://localhost/POO/13-CRUD/image/$nom_photo";

    //         $photoDossier = $_SERVER['DOCUMENT_ROOT'] . "/POO/13-CRUD/image/$nom_photo";

    //         copy($_FILES['avatar']['tmp_name'], $photoDossier);
    //     }

    //     $_POST['avatar'] = $photoBdd;

    //     $q = $this->getDb()->query("REPLACE INTO " . $this->table . "(id" . ucfirst($this->table) . "," . implode(",", array_keys($_POST)) . ") VALUES (" . $id . "," . "'" . implode("','", $_POST) . "'" . ")");

    // }

    // public function delete($id)
    // {
    //     $d = $this->getDb()->query("DELETE FROM " . $this->table . " WHERE id" . ucfirst($this->table) . "=" . (int) $id);
    // }

    // public function select($id) // méthode permettant de récupérer les données d'un employé via l'id
    // {
    //     $q = $this->getDb()->query("SELECT * FROM " . $this->table . " WHERE id" . ucfirst($this->table) . "=" . (int) $id);
    //     $r = $q->fetch(\PDO::FETCH_ASSOC);
    //     return $r;
    // }

}