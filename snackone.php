<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 

Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 

Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->
<?php


$nba = [
    [
        "homeTeam" => "Boston Celtics",
        "scoreHome" =>rand(1, 100),
        "visitingTeam" => "Brooklyn Nets",
        "scoreVisiting" =>rand(1, 100)

    ],
    [
        "homeTeam" => "New York Knicks",
        "scoreHome" =>rand(1, 100),
        "visitingTeam" => "Philadelphia 76ers",
        "scoreVisiting" => rand(1, 100)

    ],
    [
        "homeTeam" => "Toronto Raptors",
        "scoreHome" =>rand(1, 100),
        "visitingTeam" => "Chicago Bulls",
        "scoreVisiting" => rand(1, 100)

    ],
    [
        "homeTeam" => "Cleveland Cavaliers",
        "scoreHome" =>rand(1, 100),
        "visitingTeam" => "Detroit Pistons",
        "scoreVisiting" => rand(1, 100)

    ],

    [
        "homeTeam" => "Indiana Pacers",
        "scoreHome" => rand(1, 100),
        "visitingTeam" => "Milwaukee Bucks",
        "scoreVisiting" => rand(1, 100)

    ],


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info and News NBA</title>
</head>
<body>
    <ul>
        <?php
        for ($i=0; $i < count($nba) ; $i++) { 
            // Olimpia Milano - Cantù | 55-60
            $currentItem = $nba[$i];
            $rosters = $currentItem["homeTeam"] . " - " . $currentItem["visitingTeam"] . " | ". $currentItem["scoreHome"] ." - " . $currentItem["scoreVisiting"];
        ?>
          
            <li>
                <?php 
                    echo $rosters
                ?>
            </li>
            
        <?php
        }
        ?>

            
    </ul>
</body>
</html>