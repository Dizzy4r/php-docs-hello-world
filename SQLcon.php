<?php
try {
    $connn = new PDO("sqlsrv:server = tcp:tryingless.database.windows.net,1433; Database = DB_tryingLess", "iAmRobertmor", "lolHax1993");
    $connn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
$connectionInfo = array("UID" => "iAmRobertmor", "pwd" => "lolHax1993", "Database" => "DB_tryingLess", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:tryingless.database.windows.net,1433";
$connn = sqlsrv_connect($serverName, $connectionInfo);
?>
