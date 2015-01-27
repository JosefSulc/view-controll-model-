<?php
require 'classes.php';
require 'config.php';

if (session::$running == false)
{
    session::init();
}
include 'header.php';

if (!isset ($db)) {
    $db = new db();
    $db = new db(DBHOST,DBUSER,DBPASS,DBNAME);
}

if (isset($_POST['username']) && isset($_POST['password']))
{
    if ($db->login() == true)
    {
        unset($_POST['username']);
        unset($_POST['password']);
    } else {
        echo 'Invalid login, please try again';
    }
}

if (isset($_POST['note']) && $_SESSION['logged'] == true)
{
    $db->add();
}

if (isset($_POST['id']) && isset($_POST['remove']) && $_SESSION['logged'] == true)
{
    $db->remove();
}

if (isset($_POST['modify']) && isset($_POST['modifnote']) && isset($_POST['modifid']) && $_SESSION['logged'] == true)
{
    $db->modify();
}





if (isset($_POST['logout']))
{
    session::destroy();
}


if ($_SESSION['logged'] == true) {
    include 'db_form.php';
    $db->render();
} elseif ($_SESSION['logged'] == false) {
    include 'login_form.php';
} else {
    session::init();
}

























include 'footer.php';

