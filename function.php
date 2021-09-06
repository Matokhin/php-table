<?

function Products($count) {
    $mysqli = new Mysqli('localhost', 'root', '', 'test');



    $query = $mysqli->query('SELECT * FROM `Products` ORDER BY `DATE_CREATE` DESC');
    $items = [];

    for($i = $count - 1; ($row = $query->fetch_assoc());) {
        $items[] = $row;
        if($i < count($items)) break;
        $i++;
    }
    return $items;
}

?>