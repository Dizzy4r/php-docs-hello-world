<?php
session_start();
include 'connect.php';
include 'header.php';
?>

<?php
$sql = "INSERT INTO real_user (`real_name`, `real_password`, `real_mail`, `real_country`, `real_birthday`) VALUES (?, ?, ?, ?, ?);"

?>
