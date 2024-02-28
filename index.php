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

#con {
    width: 10vw;
    height: 10vh;
    background: pink;
    margin-left: 45vw;
    margin-top:10vh;
    opacity: 0.0;
    animation: 2s starteren cubic-bezier(0.215, 0.610, 0.355, 1) forwards 1s;
}

@keyframes starteren {
    from {
    width: 10vw;
    height: 10vh;
    background: pink;
    margin-left: 45vw;
    margin-top:45vh;
    opacity: 0.0;
    }
    to {
    width: 90vw;
    opacity: 1.0;
    height: 70vh;
    background: rgb(255, 242, 218);
    margin-left: 5vw;
    margin-top:15vh;
    box-shadow: 0px 0px 90px 70px rgb(165, 165, 165);
    }
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
    <td>" . $num['posttext'] . "<br> <br><p> Post-id: " .  ". Category: " . $num['postcat'] . "</p></td>
    </tr> 
    "; 
}
echo "</table>";

?>

<script src="lol.js"></script>
</body>
</html>
