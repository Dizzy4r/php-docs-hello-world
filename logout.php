<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tryingAgain</title>
</head>
<body id="bodd">


        <?php
            session_destroy();
            session_unset();
            header('Location: index.php');
        ?>

<a href"index.php"> You have logged out. Press me to go to the main page.</a>
    
</body>
</html>
