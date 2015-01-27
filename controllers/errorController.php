<?php

class errorController extends baseController {

    public function index() {
        header("HTTP/1.0 404 Not Found");
		$this->title = 404;
        $this->view->render('errorView');
    }

}
