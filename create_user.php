<?php
session_start();
include 'connect.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tryingAgain</title>
</head>
<body>
    
<form id="form1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="text" name="username" placeholder="Name">
        <br>
        <input type="password" name="pass" placeholder="Password">
        <br>
        <input type="text" name="mail" placeholder="Mail">
        <br>
        <input type="text" name="country" placeholder="Country">
        <br>
        <input type="number" name="birthday" placeholder="Birthday i.e 270793">
    <br>
    <input type="submit" name="sub" value="Register">
</form>

<?php // REGISTER. SECURE PHP

if(isset($_POST['username'], $_POST['pass'])) {
    if(strlen($_POST['username']) < 5 || strlen($_POST['pass'] < 5)) {
        echo "User not created.";
        exit();
        header('Location: create_user.php');
    }
    elseif(strlen($_POST['username']) >= 5) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['pass']);
        $mail = $_POST['mail'];
        $country = htmlspecialchars($_POST['country']);
        $birthday = htmlspecialchars($_POST['birthday']);

        $sql = "INSERT INTO real_user (`real_name`, `real_password`, `real_mail`, `real_country`, `real_birthday`) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'sssss', $username, $password, $mail, $country, $birthday);
        $result = mysqli_stmt_execute($stmt);
        if($result) {
                header('Location: login.php');
            }
            else {
                echo "User was not created";
            }
    }
}
?>
</body>
</html>
