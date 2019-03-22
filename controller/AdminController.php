<?php

namespace Controller;

class AdminController
{
    private $db;
    public function __construct()
    {
        $this->db = new \model\EntityRepository; // permet de récupérer une connexion à la BDD qui se trouve dans le fichier EntityRepository.php
    }
    public function handlerRequest() // permet de savoir ce que l'internaute demande (afficher/modifier/supprimer), action de l'internaute
    {
        //$op = isset($_GET['op']) ? $_GET['op'] : NULL; // si op est défini dans l'URL on le récupère, on le stock dans $op sinon, si rien n'est défini dans l'URL, on stock NULL dans $op

        if(isset($_GET['admin'])) {

            if($_GET['admin'] == "connexion") {
                $this->admin();
            }    
        }

        if(isset($_GET['back'])) {
            $this->renderLayout("backOffice.php");
        }
    }

    public function admin() {
        $this->renderLayout("connexion.php");
    }
    
    public function renderLayout($layout, $parameters = array())
    {
        ob_start();
        ob_get_clean();

        require "view/admin/$layout";

        return ob_end_flush(); // libérer l'affichage de sortie et fait tout apparaitre sur la page
    }
    
}