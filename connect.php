<?php
/*
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "tryingagain.mysql.database.azure.com", "dizzy4r93", "gjnfkitemt93-", "db_trying", 3306, NULL, MYSQLI_CLIENT_SSL);
*/

$conn = mysqli_connect("tryingagain.mysql.database.azure.com", "dizzy4r93", "gjnfkitemt93-", "db_trying", 3306);

?>
