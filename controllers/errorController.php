<?php

class errorController extends baseController {

    public function index() {
        $this->title = 404;
        $this->view->render('errorView');
    }

}
