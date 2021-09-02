<?php
$mysqli = new Mysqli('localhost', 'root', '', 'test');

$query = $mysqli->query('UPDATE `products` SET `PRODUCT_QUANTITY` = "" WHERE `ID` = `ID`');


?>