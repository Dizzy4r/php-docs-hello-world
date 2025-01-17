<?php
session_start();
include "connect.php";
include 'header.php';
?>
<?php
if(!isset($_SESSION['name'])) {
    header('Location: index.php');
}
?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <input type="text" name="userpost" placeholder="Info here">
    <select name="category" required>
        <option value="Computer">Computers</option>
        <option value="Work">Work</option>
        <option value="Random">Random</option>
    </select>
    <br>
    <input type="submit">
    </form>

<?php

if(isset($_POST['userpost'])) {
    if(strlen($_POST['userpost']) <= 10) {
        exit("Provide more than 10 characters.");
        echo "Provide more than 10 characters.";
        header('Location: post.php');
    }
    else {
        $post = htmlspecialchars($_POST['userpost']);
        $postcat = $_POST['category'];
        $sql = "INSERT INTO forumposts (`postname`, `posttext`, `postcat`) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $_SESSION['name'], $post, $postcat);
        $result = mysqli_stmt_execute($stmt);

        if($result) {
            header('Location: index.php');
        }
    }
}

?>

</body>
</html>
