<?php

namespace model;

class EntityRepository
{
    private $db;
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

    public function userCheck($email, $mdp) {
        $q = $this->getDb()->query("SELECT * from user where email='$email' and password='$mdp'");
        return $q->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getFields($table) // méthode permettant de recolter les données des champs/colonnes d'une table
    {
        $q = $this->getDb()->query("DESC " . $table); // DESC : description de la table
        $r = $q->fetchAll(\PDO::FETCH_ASSOC);
        return $r;
    }

    public function selectAll($table)
    {
        $q = $this->getDb()->query("SELECT * FROM " . $table); // requete permettant de selectionner toutes les données d'une table
        $r = $q->fetch();
        return $r;
    }

    public function save()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 'NULL';

        if(!empty($_FILES['photo']['name'])){
            $nom_photo = uniqid() . '-' . $_FILES['photo']['name'];

            $photoBdd = "http://localhost/portfolio/img/$nom_photo";

            $photoDossier = $_SERVER['DOCUMENT_ROOT'] . "/portfolio/img/copie/$nom_photo";

            copy($_FILES['photo']['tmp_name'], $photoDossier);
        }

        $_POST['photo'] = $photoBdd;

        $q = $this->getDb()->query("REPLACE INTO " . $table . "(id" . $table . "," . implode(",", array_keys($_POST)) . ") VALUES (" . $id . "," . "'" . implode("','", $_POST) . "'" . ")");

    }

    public function delete($id)
    {
        $d = $this->getDb()->query("DELETE FROM " . $table . " WHERE id" . $table . "=" . (int) $id);
    }

    public function select($id, $table) // méthode permettant de récupérer les données d'un employé via l'id
    {
        $q = $this->getDb()->query("SELECT * FROM " . $table . " WHERE id" . $table . "=" . (int) $id);
        $r = $q->fetch(\PDO::FETCH_ASSOC);
        return $r;
    }

}