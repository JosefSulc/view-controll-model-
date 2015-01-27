<?php

class App {

    private $url;

    public function __construct() {
//Loading libraries


        require 'libs/router/router.php';
        router::$path = 'libs/router/routes.txt';

//Loading bases
        require 'base/controller.php';
        require 'base/model.php';
        require 'base/session.php';
        require 'base/view.php';

//Loading config
        require 'config/config.php';
        $this->url = trim($_SERVER['REQUEST_URI'], '/');
    }

    function loadController() {
        $call = router::route($this->url);
        $class = $call['controller'] . 'Controller';
        if (file_exists('controllers/' . $class . '.php')) {
            require 'controllers/' . $class . '.php';

            $controller = isset($call['params']) ? new $class($call['params']) : new $class();
            if (method_exists($controller, $call['method'])) {
                $controller->$call['method']();
            } else {
                $controller->index();
            }
        } else {
            require 'controllers/errorController.php';
            $controller = new errorController();
            $controller->index();
        }
    }

}
