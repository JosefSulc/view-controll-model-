<?php

class homeController extends baseController {

    public function index() {
        $this->title = 'Josef Šulc';
        $this->view->render('homeView', $this->model->fetch());
    }

}
