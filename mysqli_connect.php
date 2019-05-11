<?php

DEFINE('DB_USER','leelahotel');
DEFINE('DB_PASSWORD','turtledove');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','test3');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL'.mysqliconnect_error());
?>