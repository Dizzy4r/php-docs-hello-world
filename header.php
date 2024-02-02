<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>tryingAgain</title>
</head>
<body>
    
<header>tryingAgain.</header>

<nav>
    <div id="welcome">Welcome <?php if(isset($_SESSION['name'])) {
            echo $_SESSION['name'];
        }?> </div>
    <div id="play"><a href="play.html">Play</a></div>
    <div id="create"><a href="#">Post</a></div>
    <div id="contact"><a href="#">Contact</a></div>
    <div id="home"><a href="index.php">Home</a></div>
    <div id="log">
        <?php
if(isset($_SESSION['name'])) {
    echo "<div id='log'><a href='logout.php'>Log out</a></div>";
}
if(!isset($_SESSION['name'])) {
    echo "<div id='log'><a href='login.php'>Log in</a></div>";
}
?>
    </div>
</nav>
    
</body>
</html>
