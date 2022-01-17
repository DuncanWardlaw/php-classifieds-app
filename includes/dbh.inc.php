<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "classifieds";

$db_con = new mysqli($serverName, $dbUsername, $dbPassword, "classifieds", 8085  );
if (!$db_con) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '
           . mysqli_connect_error());
}
mysqli_set_charset($db_con, 'utf-8');