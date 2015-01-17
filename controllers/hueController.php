<?php

class hueController extends baseController {

    public function index() {
        $this->content = 'Hue to you too,' . $this->params['name'] . ' !';
        $this->view->render('hueView',$this->content);
    }

}
