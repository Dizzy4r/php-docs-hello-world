<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Welcome to Trying-again</title>
</head>
<body>
    <h1> Pre php tag </h1>

<?php

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "tryingagain.azurewebsites.net", "dizzy4r93", "gjnfkitemt93-", "db_trying", 3306, NULL, MYSQLI_CLIENT_SSL);
mysqli_close();

if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
else {
    echo "Connection established.";
        }

?>

<h1> Overskrift. </h1>

</body>
</html>

