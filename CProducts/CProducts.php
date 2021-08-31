<?php

namespace CProducts;

class CProducts {
    public function get_connection() {
        $mysqli = new Mysqli('localhost', 'root', '', 'test');
        return $mysqli;
    }

    public function get_products($count) {
        $query = $this->get_connection()->query('SELECT * FROM `Products` ORDER BY `DATE_CREATE` DESC');
        $items = [];

        for($i = $count - 1; ($row = $query->fetch_assoc());) {
            $items[] = $row;
            if($i < count($items)) break;
            $i++;
        }
        return $items;
    }
}