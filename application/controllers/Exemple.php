<?php



class Exemple extends ci_Controller
{
    function index()
    {
        //Fonction pour visualiser la page de saisie d'information
        $this->load->view('Exemple_Add_View');
    }
}

?>