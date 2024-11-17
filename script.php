<?php
session_start();

if (!isset($_SESSION["registrazioni"])){
  $_SESSION["registrazioni"] = array();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $cf = $_GET["cf"];
      $eta = $_GET["eta"];

      $_SESSION["registrazioni"][$cf] = $eta;
    ?>

  <p><a href="./form.html">Ritorna alla form</a></p>
  <p><a href="./risultati.php">Visualizza risultati</a></p>

</body>
</html>