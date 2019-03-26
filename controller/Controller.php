<?php

namespace Controller;

class Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new \model\EntityRepository; // permet de récupérer une connexion à la BDD qui se trouve dans le fichier EntityRepository.php
    }
    public function handlerRequest() // permet de savoir ce que l'internaute demande (afficher/modifier/supprimer), action de l'internaute
    {

        $page = isset($_GET['page']) ? $_GET['page'] : NULL; // si page est défini dans l'URL on le récupère, on le stock dans $page sinon, si rien n'est défini dans l'URL, on stock NULL dans $page

        try
        {
            if($page == 'add' || $page == 'update') $this->save($page); // si on ajoute ou modifie un élément, on appel la méthode save()
            elseif($page == 'select') $this->select($page); // si on selectionne un élément, on appel la méthode select()
            elseif($page == 'delete') $this->delete($page); // si on supprime un élément, on appel la méthode delete()
            // else $this->selectAll(); // permettra d'afficher l'ensemble des éléments 
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage()); // permet d'envoyer un message et d'arreter le script si il y a une erreur dans le bloc try
        }

        
        if(isset($_GET['lang'])){
            $_SESSION['lang'] = $_GET['lang'];
        }

        if($page == NULL) {
            if(isset($_SESSION['lang']) && !empty($_SESSION['lang'])) {
                $this->accueil($_SESSION['lang']);
            } else {
                $this->accueil("fr");
            }
        } 
        elseif($page == "connexion") {
            if(isset($_SESSION["user"])) {
                $this->selectAll();
            }
            // REQUETES POST
            elseif($_POST) { 
                if($this->db->userCheck($_POST["email"], $_POST["password"])) {
                    $_SESSION["user"] = $_POST["email"];
                    $this->selectAll();
                }
                else{
                    $this->renderLayout("layout.php", "admin/connexion.php", array(
                        "errors"=>"Email et/ou mot de passe incorrect(s)"
                    ));
                }
            }
            else{
                $this->renderLayout("layout.php", "admin/connexion.php");
            }
        }
        elseif($page == "out") {
            session_destroy();
            $this->renderLayout("layout.php", "layout_fr.php");
        }
    }

    public function accueil($lang){
                
        if(isset($lang) && $lang == "fr") {
            $this->renderLayout("layout_fr.php","layout.php", array(
                "title"=>"Voici l'ensemble des données du site",
                "introduction"=>$this->db->selectAll("intro_fr"),
                "intro"=>$this->db->selectAll("intro_en"),
                "projets"=>$this->db->selectAll("projet"),
                "projects"=>$this->db->selectAll("project"),
                "formations"=>$this->db->selectAll("formation"),
                "forms"=>$this->db->selectAll("form"),
                "skills"=>$this->db->selectAll("skill"),
                "competences"=>$this->db->selectAll("competence"),
                "users"=>$this->db->selectAll("user"),
                "contact"=>$this->db->selectAll("contact") // affiche l'id d'une table, cela servira a pointer sur l'indice id de la table voulue du tableau de données envoyer dans le layout pour les liens voir/modifier/supprimer
            ));
        } else if(isset($lang) && $lang == "en") {
            $this->renderLayout("layout_en.php", "layout.php", array(
                "title"=>"Voici l'ensemble des données du site",
                "introduction"=>$this->db->selectAll("intro_fr"),
                "intro"=>$this->db->selectAll("intro_en"),
                "projets"=>$this->db->selectAll("projet"),
                "projects"=>$this->db->selectAll("project"),
                "formations"=>$this->db->selectAll("formation"),
                "forms"=>$this->db->selectAll("form"),
                "skills"=>$this->db->selectAll("skill"),
                "competences"=>$this->db->selectAll("competence"),
                "users"=>$this->db->selectAll("user"),
                "contact"=>$this->db->selectAll("contact") // affiche l'id d'une table, cela servira a pointer sur l'indice id de la table voulue du tableau de données envoyer dans le layout pour les liens voir/modifier/supprimer
            ));
        }

    }
        
    public function renderLayout($p, $layout = "layout.php", $parameters = array())
    {
        extract($parameters);

        ob_start();

        require "view/$p";
        
        ob_start();
        
        require "view/$layout";
        
        return ob_end_flush(); // libérer l'affichage de sortie et fait tout apparaitre sur la page
    }

    public function selectAll()
    {
        $this->renderLayout("layout.php", "admin/backOffice.php", array(
            "title"=>"Voici l'ensemble des données du site",
            "introduction"=>$this->db->selectAll("intro_fr"),
            "intro"=>$this->db->selectAll("intro_en"),
            "projets"=>$this->db->selectAll("projet"),
            "projects"=>$this->db->selectAll("project"),
            "formations"=>$this->db->selectAll("formation"),
            "forms"=>$this->db->selectAll("form"),
            "skills"=>$this->db->selectAll("skill"),
            "competences"=>$this->db->selectAll("competence"),
            "users"=>$this->db->selectAll("user"),
            "contact"=>$this->db->selectAll("contact"),
            "fields"=>$this->db->getFields($_GET['table']),
            "id" => "id" . ucfirst($this->db->getFields($_GET['table'])) // affiche l'id d'une table, cela servira a pointer sur l'indice id de la table voulue du tableau de données envoyer dans le layout pour les liens voir/modifier/supprimer
        ));
    }

    public function redirect($url)// méthode permettant d'effectuer une redirection
    {
        header("Location:" . $url); // fonction prédéfinie permettant d'effectuer une redirection
    }

    public function save($page)
    {
        $title = $page;

        $id = isset($_GET['id']) ? $_GET['id'] : NULL; // permet de savoir si un id a été envoyé dans l'URL, si on clique sur 'modifier' on envoi l'id dans l'URL et on le récupère, sinon c'est un ajout

        $values = ($page == 'update') ? $this->db->select($id) : ''; // si on a envoyé un id dans l'URL, on l'envoi en argument de la méthode select() de entityRepository, cela permattra de selectionner toute les données de l'élément pour la modification

        if($_POST)
        {
            $r = $this->db->save(); // lorque l'on valide le formulaire d'ajout, on execute la methode save() du fichier EntityRepository.php 
            $this->redirect('index.php');
        }
        $this->renderLayout('layout.php', 'donnees-form.php', array(
            "title" => "Données : $title",
            "page" => $page,
            "fields" => $this->db->getFields(), // c'est ce qui va nous permettre de récupérer le nom des champs pour les définir de façon générique
            "values" => $values, // permet de récupérer toute les données de l'élément en cas de modification
            
        ));
    }

    public function delete($page) // fonction permettant de supprimer l'élément selectionné via son id
    {
        $id = isset($_GET["id"]) ? $_GET['id'] : NULL;
        $d = $this->db->delete($id);
        $this->redirect('index.php');
    }

    public function select($page)
    {
        $id = isset($_GET["id"]) ? $_GET['id'] : NULL;
        $s = $this->db->select($id);

        $this->render("layout.php", "backOffice.php", array(
            "title"=>"Données de l'employé : " . $id,
            "donnees"=>$this->db->select($id),
            "fields"=>$this->db->getFields(),
            "id" => "id" . ucfirst($this->db->table),
        ));
    }
}

