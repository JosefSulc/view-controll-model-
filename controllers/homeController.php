<?php

class homeController extends baseController {

    public function index() {
        $this->title = 'Josef Šulc';
        $this->view->ruleOfThree('black');
        $this->view->render('homeView', $this->model->fetch());
    }

}
