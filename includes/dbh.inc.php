<?php
$serverName = "app-d95fbec7-6866-4a2a-9310-3ea2baf61f53-do-user-10597333-0.b.db.ondigitalocean.com";
$dbUsername = "classifieds";
$dbPassword = 'vUi4i3qOT62DqScR';
$dbName = "classifieds";
$port = 25060;

$db_con = new mysqli($serverName, $dbUsername, $dbPassword, $dbName, $port  );
if (!$db_con) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '
           . mysqli_connect_error());
}
mysqli_set_charset($db_con, 'utf-8');