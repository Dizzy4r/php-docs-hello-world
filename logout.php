<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tryingAgain</title>
</head>
<body id="bodd">

<script>
const bod = document.getElementById("bodd");
function myScript() {
    return {
        </script>
        <?php
            session_destroy();
            session_unset();
            header('Location: index.php');
        ?>
        <script>
    }
}
bod.addEventListener("load", myScript);

</script>
    


</body>
</html>
