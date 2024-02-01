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
