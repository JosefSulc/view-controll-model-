<?php

class View {

    public function render($view, $content = false) {
        require 'front/templates/header.php';
        include 'views/' . $view . '.php';
        require 'front/templates/footer.php';
    }

}
