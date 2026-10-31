<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Variablels, arrays and operators</title>
</head>
<body>
    <h1>Using PHP Variables, arrays and operators</h1>
<?php
    $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    echo "<p>The days of the week in English are: <br/>";
    echo implode(", ", $days) . ".</p>";
    $days [0] = "Lundi";
    $days [1] = "Mardi";
    $days [2] = "Mercredi";
    $days [3] = "Jeudi";
    $days [4] = "Vendredi";
    $days [5] = "Samedi";
    $days [6] = "Dimanche";
    echo "<p>The days of the week in French are: <br/>";
    echo implode(", ", $days) . ".</p>";
?>
    
</body>
</html>