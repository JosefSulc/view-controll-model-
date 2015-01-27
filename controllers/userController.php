<?php

class userController extends baseController {

    public function index() {
		$this->view->render('loginView', $this->message);
	}	
	
	public function execute() {
        
		if (Session::getValue('logged')) {
            header('Location: http://josefsulc.eu/admin');
			exit;
        }

        if (isset($_POST['user']) && isset($_POST['pass'])) {
			$userID = $this->model->userExists($_POST['user'], $_POST['pass']);
			
			if ($userID !== false) {
				
                Session::saveValue('logged', true);
				Session::saveValue('userData', $userID);
				
				header('Location: http://josefsulc.eu/admin');
			    exit;
				
            } else {
				$this->view->render("loginView", 'Login incorrect. Perhaps you forgot your password?');
            }
        }
    }

    public function logout() {
        Session::delete('logged');
        header('Location: http://josefsulc.eu');
        exit;
    }
}