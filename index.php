<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Welcome to Trying-again</title>
</head>
<body>

<?php

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "tryingagain.mysql.database.azure.com", "dizzy4r93", "gjnfkitemt93-", "db_trying", 3306, MYSQLI_CLIENT_SSL);

if($con) {
    echo "Connection to database OK";
}
else {
    echo "No DB connection";
}

?>

<h1> Overskrift. </h1>

</body>
</html>

