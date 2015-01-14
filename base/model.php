<?php

class baseModel {

    protected $db;

    public function __construct() {
        $this->db = new mysqli(HOST,USER,PASS,DB);
        if ($this->db->errno) {
            echo 'Connection to database failed';
            exit;
        }
    }

}
