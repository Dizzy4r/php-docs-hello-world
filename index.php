<?php
session_start();
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

<style>
    table, th, td {
    margin-top: 10vh;
    border: solid 1px black;
    font-size: 3vh;
}
td {
    background: white;
}
th {
    width: 80vw;
    background: rgb(223, 249, 223);

}
table {
    background: rgb(223, 249, 223);
    margin-left: 10vw;
    width: 80vw;
    height: 50vh auto;
}

#form1 {
    background: red;
    width: 50vw;
    margin-left: 25vw;
    text-align: center;
}
</style>

<div id="cont" style="height:120vh;">
<div id="form1">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <p>Choose a category</p>
    <select name="category">
        <option value="Work">Computer</option>
        <option value="Work">Work</option>
        <option value="Random">Random</option>
    </select>
    <input type="submit">
</form>
</div>
    
<?php
if(isset($_POST['category'])) {
    $cat = $_POST['category'];
    $sql = "SELECT * FROM forumposts WHERE postCat='$cat' ORDER BY postid DESC"; // Trenger visst ikke `` tegnene 
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result); // Ikke nødvendig?
echo "<table>";
$x = 0;
while ($num = $result->fetch_assoc()) {
    if($x < 3) {
        $x++;
    }
    elseif($x >= 3) {
        break;
    }
    echo " <tr>
    <td style='width:13vw'>" . $num['postname'] . "</td>
    <td>" . $num['posttext'] . "<br> <br>" . $num['postid'] .  "</td>
    </tr> 
    "; 
}
echo "</table>";
}
?>

</div>
    
</body>
</html>
