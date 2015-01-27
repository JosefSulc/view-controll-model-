<!DOCTYPE html>

<html>
    <head>
        <link href="http://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="<?php echo $this->style; ?>">
        <title><?php echo $this->title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="header">
            <div class="header-wrapper">
                <div class="header-headings">
                    <h1>Hello!</h1>
                    <div class="links">
                        <a href="http://josefsulc.eu">Index</a>
                        <?php
                        if (Session::getValue('logged') === false) {
                            echo '<a href="http://josefsulc.eu/login">Log-in</a>';
                        } else {
                            echo '<a href="http://josefsulc.eu/logout">Log-out</a>';
                        }
                        ?>
                        <a href="http://josefsulc.eu/404">Error</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="wrapper">