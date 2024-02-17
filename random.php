<?php
session_start();
if(!isset($_SESSION['name'])) {
  header('Location: index.php');
}
include 'connect.php';
include 'headertest.php';
?>

<?php
if(isset($_SESSION['name'])) {
  echo 'Endelig';
}
else {
  echo 'ikkje online';
}
?>
<style>
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
    width: 80vw;
    opacity: 1.0;
    height: 70vh;
    background: rgb(255, 242, 218);
    margin-left: 10vw;
    margin-top:15vh;
    box-shadow: 0px 0px 90px 70px rgb(165, 165, 165);
    }
}
</style>

<div id="con">
<p style="text-align: center;">Heihei <?php echo $_SESSION['name'];?></p>
</div>

</body>
</html>
