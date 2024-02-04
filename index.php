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
</style>

<div id="cont" style="height:120vh;">
<table>
<?php 

$sql = "SELECT * FROM forumposts ORDER BY postid ASC"; 
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

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
    </tr><br>
    "; 
}

?>
</table>

</div>
    
</body>
</html>
