<?php
session_start();
if(isset($_SESSION['name'])) {
    exit();
    header('Location: index.php');
}
?>
<?php
include 'header.php';
include 'connect.php';
?>
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
<p id="ppp"> Dont have an account? Create your user <a href="create_user.php"> here </a> </p>
    <br>
<form id="form2" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="text" name="username" placeholder="username" id="nme">
            <br>
        <input type="password" name="password" placeholder="password" id="pas">
            <br>
        <input type="submit" name="sub2" value="Login" id="sub2">
</form>
</div>

<?php
    // LOGIN SECURE PHP
if(isset($_POST['username'], $_POST['password'])) {
    if(strlen($_POST['username']) < 5 || strlen($_POST['password'] < 5)) {
        exit();
        header('Location: login.php');
    }
}

if(!isset($_POST['username'], $_POST['password'])) {
    exit("Please fill both fields.");
    header('Location: login.php');
}

if($stmt = $conn->prepare('SELECT fld_id, fld_password FROM userr WHERE fld_name = ?')) {
            $name = htmlspecialchars($_POST['username']);
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
    
</body>
</html>
