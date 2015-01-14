<?php

class homeController extends baseController {

    public function cat() {
        $this->title   = 'cat';
        $this->content = '<img src="'.$this->model->fetch().'" alt="" width="30%">';
        require $this->view;
    }
    
    public function dog() {
        $this->content = 'Whoof whoof!';
        require $this->view;
    }

}
