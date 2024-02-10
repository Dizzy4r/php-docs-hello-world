<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:tryingless.database.windows.net,1433; Database = DB_tryingLess", "iAmRobertmor", "lolHax1993");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
