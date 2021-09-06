<?

function Products($count) {
    $mysqli = new Mysqli('localhost', 'root', '', 'test');
    $query = $mysqli->query('SELECT * FROM `Products` ORDER BY `DATE_CREATE` DESC');
    $items_result = [];
    for($i = 0;($items = $query->fetch_assoc()); $i++) {
        if($i >= $count) {
            break;
        }
        $items_result[] = $items;
    }
    return $items_result;
}

?>