<?php

$psw = getenv("PASSWORD");
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "tryingagain.mysql.database.azure.com", "dizzy4r93", $psw, "db_trying", 3306, NULL, MYSQLI_CLIENT_SSL);
?>
