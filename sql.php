<?php
$mysqli = new Mysqli('localhost', 'root', '', 'test');

    $query = $mysqli->query('UPDATE `products` SET `IS_HIDE` = "hide" WHERE `ID` = `1`');




?>