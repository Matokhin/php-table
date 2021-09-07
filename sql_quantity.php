<?php
$mysqli = new Mysqli('localhost', 'root', '', 'test');
if (isset($_POST['id_minus'])){
    $id = $_POST['id_minus'];
    $query = $mysqli->query("UPDATE `products` SET `PRODUCT_QUANTITY` = `PRODUCT_QUANTITY` - 1 WHERE `ID` = '$id'");
}

if (isset($_POST['id_plus'])){
    $id = $_POST['id_plus'];
    $query = $mysqli->query("UPDATE `products` SET `PRODUCT_QUANTITY` = `PRODUCT_QUANTITY` + 1 WHERE `ID` = '$id'");
}



?>