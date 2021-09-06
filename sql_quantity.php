<?php
$mysqli = new Mysqli('localhost', 'root', '', 'test');
if (isset($_POST['id_minus'])){
    $id = $_POST['id_minus'];
    $count = $_POST['count'];
    $query = $mysqli->query("UPDATE `products` SET `PRODUCT_QUANTITY` = '$count' - 1 WHERE `ID` = '$id'");
}

if (isset($_POST['id_plus'])){
    $id = $_POST['id_plus'];
    $count = $_POST['count'];
    $query = $mysqli->query("UPDATE `products` SET `PRODUCT_QUANTITY` = '$count' + 1 WHERE `ID` = '$id'");
}



?>