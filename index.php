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

echo "e be the first PHP echo<br>";
echo "This will be the seoncd";

$query = "SELECT * FROM xxx";
$result = mysqli_query($conn, $query);
while ($row = $result->fetch_assoc()) {
    echo $row['fld_name'];
    echo "<br>";
}

?>

</body>
</html>

