<?php
include 'connect.php';
include 'header.php';
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
    <div id="welcome">Welcome</div>
    <div id="play"><a href="play.html">Play</a></div>
    <div id="create"><a href="#">Create post</a></div>
    <div id="contact"><a href="#">Contact</a></div>
    <div id="home"><a href="#">Home</a></div>
    <div id="log"><a href="#">Log in</a></div>
</nav>

<div id="cont" style="height:120vh;">
    
<?php
$query = "SELECT * FROM userr";
$result = mysqli_query($conn, $query);
while ($row = $result->fetch_assoc()) {
    echo $row['fld_name'];
    echo "<br>";
}
?>
</div>
    
</body>
</html>
