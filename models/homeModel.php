<?php

class homeModel extends baseModel {

    public function fetch() {
        $query = $this->db->query('SELECT content FROM articles WHERE id=1')->fetch_row();
        return $query;
    }

}
