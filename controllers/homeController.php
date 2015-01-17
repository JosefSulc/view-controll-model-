<?php

class homeController extends baseController {

    public function index() {
        //$this->view->ruleOfThree('black');
        //$this->view->title = ...
        //$this->view->style = ...
        $this->view->render('homeView', $this->model->fetch());
    }

}
