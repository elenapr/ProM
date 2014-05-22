<?php

define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG', true);

session_start();

class Application
{
   	                // Acesti parametri vor retine controllerul/actiunea/parametrii accesati printr-un url request
   	                // Aplicatia este setata sa primeasca maxim 3 parametri in URL
   	                private $url_controller = null;
   	                private $url_action = null;
   	                private $url_parameter_1 = null;
   	                private $url_parameter_2 = null;
   	                private $url_parameter_3 = null;
                     
   	                 public function __construct()
   	                {
   	                    $this->splitUrl();

                           // Verificarea sesiunii astfel incat userul sa fie delogat atunci cand userul este inactiv mai mult de x secunde
                           if (!isset($_SESSION['created'])) 
                           {
                              $_SESSION['created'] = time();
                           }
                           else 
                           if (time() - $_SESSION['created'] > 60000) 
                           {
                              $_SESSION['user_data'] = null;
                              $_SESSION['created'] = time();

                              header('Location: login');

                              return;
                           }

                           $_SESSION['created'] = time();

                           if(!isset($_SESSION['user_data']) || $_SESSION['user_data'] == null)
                           {
                              require './application/controller/login.php';

                              $home = new Login();
                              $home->index();

                              return;   
                           }
                           

   	                    // Se face verificare in cazul in care exista controllerul
   	                    if (file_exists('./application/controller/' . $this->url_controller . '.php')) 
   	                    {
   	                        require './application/controller/' . $this->url_controller . '.php';
   	                        $this->url_controller = new $this->url_controller();

   	                        // Se face verificare in cazul in care exista metoda
   	                        if (method_exists($this->url_controller, $this->url_action)) 
   	                        {
   	                            if (isset($this->url_parameter_3)) 
   	                            {
   	                                // Trimiterea celor 3 parametri la controller
   	                                $this->url_controller->{$this->url_action}($this->url_parameter_1, $this->url_parameter_2, $this->url_parameter_3);
   	                            } 
   	                            else
   	                            if (isset($this->url_parameter_2)) 
   	                            {
   	                                // Trimiterea celor 2 parametri la controller
   	                                $this->url_controller->{$this->url_action}($this->url_parameter_1, $this->url_parameter_2);
   	                            } else
   	                            if (isset($this->url_parameter_1)) 
   	                            {
   	                                // Trimiterea parametrului la controller
   	                                $this->url_controller->{$this->url_action}($this->url_parameter_1);
   	                            } 
   	                            else 
   	                            {
   	                                // In cazul in care nu s-a trimis niciun parametru, se va apela functia
   	                                $this->url_controller->{$this->url_action}();
   	                            }
   	                        } 
   	                        else 
   	                        {
   	                            // default/fallback: call the index() method of a selected controller
   	                            $this->url_controller->index();
   	                        }
   	                    } 
   	                    else 
   	                    {
   	                        // Vom trimite userul la pagina de login in cazul in care nu exista controllerul 
   	                        require './application/controller/login.php';
   	                        $home = new Login();
   	                        $home->index();
   	                    }
   	                }

   	                private function splitUrl()
   	                {
   	                    if (isset($_GET['url'])) {

   	                        $url = rtrim($_GET['url'], '/');
   	                        $url = filter_var($url, FILTER_SANITIZE_URL);
   	                        $url = explode('/', $url);

   	                        $this->url_controller = (isset($url[0]) ? $url[0] : null);
   	                        $this->url_action = (isset($url[1]) ? $url[1] : null);
   	                        $this->url_parameter_1 = (isset($url[2]) ? $url[2] : null);
   	                        $this->url_parameter_2 = (isset($url[3]) ? $url[3] : null);
   	                        $this->url_parameter_3 = (isset($url[4]) ? $url[4] : null);
   	                    }
   	                }
}

?>
