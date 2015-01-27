<?php

class baseController {

    protected $view;
    protected $model;
    protected $content;
    protected $params;
    protected $title = TITLE;
    protected $style = STYLESHEET;

    public function __construct($params = false) {
        Session::start();
        $name = str_replace('Controller', '', get_class($this));
        $classModel = $name . 'Model';

        if (file_exists('models/' . $classModel . '.php')) {
            require 'models/' . $classModel . '.php';
            $this->model = new $classModel;
        }

        $this->view = new View();

        $this->params = $params;
    }

}
