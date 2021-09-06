<?php

namespace CProducts;

class CProducts {
    public function get_connection() {
        $mysqli = new Mysqli('localhost', 'root', '', 'test');
        return $mysqli;
    }

    public function get_products($count) {
        $query = $this->get_connection()->query('SELECT * FROM `Products` ORDER BY `DATE_CREATE` DESC');
        $items_result = [];
        for($i = 0;($items = $query->fetch_assoc()); $i++) {
            if($i >= $count) {
                break;
            }
            $items_result[] = $items;

        }

        return $items_result;
    }
}