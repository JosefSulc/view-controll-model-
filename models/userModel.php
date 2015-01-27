<?php

class userModel extends baseModel {

    public function userExists($user, $pass) {
        $rows = $this->db->query('SELECT id,username FROM users WHERE username="' . $this->db->real_escape_string($user) . '" AND password="' . md5($this->db->real_escape_string($pass)) . '"');
        return $rows->num_rows !== 0 ? $rows->fetch_assoc() : false;
    }

}
