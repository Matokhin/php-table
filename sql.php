<?php
$mysqli = new Mysqli('localhost', 'root', '', 'test');

$query = $mysqli->query('UPDATE `Products`(IS_HIDE) SET `IS_HIDE` = `hide`');


?>