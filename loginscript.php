<?php // LOGIN SECURE PHP

if(isset($_POST['username'], $_POST['password'])) {
    if(strlen($_POST['username']) < 5 || strlen($_POST['password'] < 5)) {
        echo "Username and password must be above 5 characters.";
        exit();
    //    header('Location: login.php');
    }
}

if(!isset($_POST['username'], $_POST['password'])) {
    exit("Please fill both fields.");
  //  header('Location: login.php');
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
