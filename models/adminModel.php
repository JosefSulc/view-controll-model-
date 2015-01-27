<?php

class adminModel extends baseModel {

    public function fetch() {
        $rows = $this->db->query('SELECT * FROM articles');

        while ($row = $rows->fetch_assoc()) {
            $arr[] = $this->escape($row);
        }


        return $arr;
    }

    private function escape($row) {
        foreach ($row as $key => $i) {
            $row[$key] = htmlspecialchars($i);
        }
        return $row;
    }

}
