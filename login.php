<?php
session_start();
include 'loginscript.php';
include 'connect.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Log in</title>
</head>
<body>

<style>
    #xy {
        margin-left: 40vw;
        width: 20vw;
        height: 30vh;
        text-align: center;
    }
    #nme {
        width: 20vw;
        height: 7vh;
    }
    #pas {
        width: 20vw;
        height: 7vh;
    }
</style>

<div id="xy">
<p id="ppp"> Dont have an account? Create your user <a href="#"> here </a> </p>
    <br>
<form id="form2" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="text" name="username" placeholder="username" id="nme">
            <br>
        <input type="password" name="password" placeholder="password" id="pas">
            <br>
        <input type="submit" name="sub2" value="Login" id="sub2">
</form>
</div>



</body>
</html>
