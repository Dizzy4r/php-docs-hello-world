<?php
session_start();
include 'header.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginusers.css">
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



<p id="pen">
<?php // LOGIN SECURE PHP

function val($x) { // Alters the submitted text to prevent XSS.
    $x = trim($x);
    $x = htmlspecialchars($x);
    return $x;
}

if(isset($_POST['username'], $_POST['password'])) {
    if(strlen($_POST['username']) < 5 || strlen($_POST['password'] < 5)) {
        echo "Username and password must be above 5 characters.";
        exit();
        header('Location: login.php');
    }
}

if(!isset($_POST['username'], $_POST['password'])) {
    exit("Please fill both fields.");
    header('Location: login.php');
}

if($stmt = $conn->prepare('SELECT fld_id, fld_password FROM userr WHERE fld_name = ?')) {
            $name = val($_POST['username']);
            $stmt->bind_param('s', $name);
            $stmt->execute();
            $stmt->store_result();
        
                if($stmt->num_rows > 0) {
                    $stmt->bind_result($id, $password);
                    $stmt->fetch();
                    
                        if($_POST['password'] === $password) {
                            $_SESSION['name'] = $_POST['username'];
                            header('Location: index.php');                           
                            // session_regenerate_id();
                           // $_SESSION['id'] = $id;
                           // $_SESSION['login'] = $name;
                        }
                    } 
            $stmt->close();
        }
?>
</p>
</div>



</body>
</html>
