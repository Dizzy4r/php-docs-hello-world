<?php
include 'header.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tryingAgain</title>
</head>
<body>
    
<?php
    session_destroy();
    session_unset();
    header('Location: index.php');
?>

</body>
</html>
