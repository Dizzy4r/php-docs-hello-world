<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Whalecum to Trying-again</title>
</head>
<body>

<?php

echo "Im going crazy because php wont let me connect my database";

$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);
while ($row = $result->fetch_assoc()) {
    echo $row['fld_name'];
    echo "<br>";
}


?>

</body>
</html>

