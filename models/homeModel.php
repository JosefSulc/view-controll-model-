<?php

class homeModel extends baseModel {

    public function fetch() {
        $query = $this->db->query('SELECT link FROM cat WHERE ID=1')->fetch_assoc();
        return $query['link'];
    }

}
