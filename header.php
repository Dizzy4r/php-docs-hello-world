<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>tryingAgain</title>
</head>
<body>
    
<h1>tryingAgain.</h1>

<nav>
    <div id="welcome">Welcome 
<?php 
if(isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}
?>
</div>
    <div id="create"><a href="post.php">Post</a></div>
    <div id="home"><a href="index.php">Home</a></div>
        <?php 
if(isset($_SESSION['name'])) {
    echo "<div id='login'><a href='logout.php'>Log out</a></div>";
}
if(!isset($_SESSION['name'])) {
    echo "<div id='loginbtn'><a href='login.php'>Log in</a></div>";
}
?>
</nav>
