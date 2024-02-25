<?php
session_start();
include 'connect.php';
include 'header.php';
?>

<style>

#ipinfo {
    margin-left: 30vw;
    margin-top: 10vh;
    width: 40vw;
    text-align: center;
    font-size: 16px;
}
    
</style>

<div id="ipinfo">
<?php
        if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipVPN = $_SERVER['HTTP_X_FORWARDED_FOR'];
            echo "Your ip is " . $ipVPN;
        }
?>
</div>

<?php
/*
    $sql = "SELECT * FROM forumposts ORDER BY postid DESC"; // Trenger visst ikke `` tegnene 
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result); // Ikke nødvendig?
echo "<table id='teibel'>";
$x = 0;
while ($num = $result->fetch_assoc()) {
    if($x < 7) {
        $x++;
    }
    elseif($x >= 7) {
        break;
    }
    echo " <tr>
    <td style='width:13vw'>" . $num['postname'] . "</td>
    <td>" . $num['posttext'] . "<br> <br><p> Post-id: " . $num['postid'] .  ". Category: " . $num['postcat'] . "</p></td>
    </tr> 
    "; 
}
echo "</table>";
*/
?>

<script src="lol.js"></script>
</body>
</html>
