<?php
session_start();
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
  #container {
    animation: open 1s 1s forwards;
    text-align: center;
    margin-left: 50vw;
    width: 0vw;
    height: 0vh;
    background: blue;
    opacity: 0.0;
  }

  @keyframes open {
    from {
      height: 0vh;
      margin-left: 50vw;
      width: 0vw;
      opacity: 0.0;
      transform: rotateZ(0deg);
    }
    to {
      margin-left: 25vw;
      width: 50vw;
      height: 40vh;
      opacity: 0.8;
      transform: rotateZ(180deg);
    }
  }

  #bottomcontainer {
    animation: openbottom 1s 1s forwards;
    text-align: center;
    margin-left: 50vw;
    width: 0vw;
    height: 0vh;
    background: red;
    opacity: 0.0;
  }
  @keyframes openbottom {
    from {
      height: 0vh;
      margin-left: 50vw;
      width: 0vw;
      opacity: 0.0;
      transform: rotateZ(0deg);
    }
    50% {
      transform: rotateZ(0deg);
    }
    to {
      margin-left: 25vw;
      width: 50vw;
      height: 40vh;
      opacity: 0.8;
      transform: rotateZ(360deg);
    }
  }
  
</style>

<div id="container">
  <p>Just some text in the top container</p>
</div>
<br>
<div id="bottomcontainer">
  <p>Just some text in the bottom container</p>
</div>

</body>
</html>
