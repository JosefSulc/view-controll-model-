<?php

class View {

    public function render($view, $content = false) {
        include 'front/templates/header.php';
        include 'views/' . $view . '.php';
        include 'front/templates/footer.php';
    }

    public function ruleOfThree($color = red) {
        include 'libs/ro3/ro3.php';
    }

}
