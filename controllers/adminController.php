<?php

class adminController extends baseController {

    public function __construct() {
        parent::__construct();
        if (Session::getValue('logged') !== true) {
            header('Location: http://josefsulc.eu');
            exit;
        }
    }

    public function index() {
        $this->view->render('adminView', $this->model->fetch());
    }

}
