<?php

// Controlerul de baza al aplicatiei
// Orice Controller va face extend la aceast clasa
class Controller
{
    public $db = null;

    function __construct()
    {
        $this->openDatabaseConnection();
    }

    private function openDatabaseConnection()
    {

        // Aici vom vom deschide conexiunea cu baza de date, astfel o vom folosi in modelul fiecarui controller
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
//        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);
    }


    // Aceasta functie va crea modelul controllerului. 
    // Numele modelului se va da manual din controller
    public function loadModel($model_name)
    {
        require 'application/models/' . strtolower($model_name) . '.php';
        return new $model_name($this->db);
    }
}
