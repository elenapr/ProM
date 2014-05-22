<?php

// Aici se vor trata erorile aplicatiei la nivel de MVC
error_reporting(E_ALL);

ini_set("display_errors", 1);

// Configurarea Hostului serverului
define('URL', 'http://localhost/OnlineManager/');

// Conextiunea cu baza de date : se vor introduce HOST-ul,numele,userul si parola pentru accesarea bazei de date
/*
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'flest');
define('DB_USER', 'root');
define('DB_PASS', 'mysql');
*/
?>