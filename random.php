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
  'ikkje online';
}

<h1> Dette er en h1 </h1>

</body>
</html>
