<?php
$mysqli = new Mysqli('localhost', 'root', '', 'test');
if (isset($_POST['id'])){
    $hide = $_POST['id'];
    $query = $mysqli->query("UPDATE `products` SET `IS_HIDE` = 'hide' WHERE `ID` = '$hide'");

    }


?>