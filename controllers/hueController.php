<?php

class hueController extends baseController {

    public function index() {
        $this->content = 'Hue to you too,'.$this->params['name'].' !';
        require $this->view;
        
    }

}
