<?php
require_once('views/View.php');
class Router
{
    private $_ctrl;
    private $_view;

    public function routeReq()
    {
        try {
            //Chargement automatique des classes
            spl_autoload_register(function ($class) {
                //require_once('models/managers/' . $class . '.php');
                $fileManager = 'models/managers/' . $class . '.php';
                $fileObject = 'models/objects/' . $class . '.php';
                if (file_exists($fileManager)) {
                    require_once($fileManager);
                } else if (file_exists($fileObject)) {
                    require_once($fileObject);
                } else {
                    echo 'Fichier ' . $class . '.php n\'existe pas.';
                }
            });

            $url[] = '';
            //Inclusion du controller selon l'action de l'utilisateur
            if (isset($_GET['url'])) {
                $url = explode('/', filter_var($_GET['url']), FILTER_SANITIZE_URL);
                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = 'Controller' . $controller;
                $controllerFile = 'controllers/' . $controllerClass . '.php';

                if (file_exists($controllerFile)) {
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                } else
                    throw new Exception('Page introuvable');
            } else {
                require_once("controllers/ControllerHome.php");
                $this->_ctrl = new ControllerHome($url);
            }
            //Gestion des erreurs/Exceptions
        } catch (Exception $ex) {
            $errorMessage = $ex->getMessage();
            $this->_view = new View('error');
            $this->_view->generate(array('errorMessage' => $errorMessage));
        }
    }
}