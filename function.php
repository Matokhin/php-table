<?

function Products($count) {
    $mysqli = new Mysqli('localhost', 'root', '', 'test');



    $query = $mysqli->query('SELECT * FROM `Products` ORDER BY `DATE_CREATE` DESC');
    $items = [];
    while(($row = $query->fetch_assoc())) {
        $items[] = $row;
    }

    $items_result = [];
    $query = $mysqli->query('SELECT * FROM `Products` ORDER BY `DATE_CREATE` DESC');
    for($i = 1;($items = $query->fetch_assoc()); $i++) {

        $items_result[] = $items;
        if($i >= $count) {
            break;
        }
    }

    return $items_result;
}

?>