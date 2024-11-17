<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
</head>
<body>
    <table style="border: 1px solid black; border-collapse: collapse; text-align:center">
        <tr>
            <th style='border: 1px solid black'>Codice Fiscale</th>
            <th style='border: 1px solid black'>Età</th>
            
        </tr>
        
        <?php
        $totale = 0;
        foreach ($_SESSION["registrazioni"] as $chiave => $valore ){
            echo "<tr>";
            echo "<td style='border: 1px solid black'>" . $chiave . "</td>";
            echo "<td style='border: 1px solid black'>" . $valore . "</td>";
            echo "</tr>";
            $totale = $totale + intval($valore);
           
           
        }
         echo "</table>";
             $media = $totale/count($_SESSION["registrazioni"]);
             $media = round($media, 2);
             echo "<p>Età media: " . $media .  " anni</p>";
        ?>

    <p><a href="./form.html">Ritorna alla form</a></p>
     
    
</body>
</html>