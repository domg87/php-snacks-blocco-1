<!-- /* PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket
di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */  -->

<?php
    $matches = [
        [
            "squadra-casa" => "Chicago Bulls",
            "squadra-ospite" => "Los Angeles Lakers",
            "punteggio-casa" => "98",
            "punteggio-ospite" => "90",
        ],
        [
            "squadra-casa" => "Boston Celtics",
            "squadra-ospite" => "Toronto Raptors",
            "punteggio-casa" => "88",
            "punteggio-ospite" => "70",
        ],
        [
            "squadra-casa" => "Denver Nuggets",
            "squadra-ospite" => "Miami Heat",
            "punteggio-casa" => "103",
            "punteggio-ospite" => "99",
        ],
    ];

    // for($i = 0; $i < count($matches); $i++) {
    //     echo $matches[$i]["squadra-casa"]. " - " .$matches[$i]["squadra-ospite"]. " | " .$matches[$i]["punteggio-casa"]. " - " .$matches[$i]["punteggio-ospite"];
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-blocco-1</title>
</head>
<body>
    <h1>Match odierno: </h1>
    <li>
        <?php 
            for($i = 0; $i < count($matches); $i++) {
                 echo $matches[$i]["squadra-casa"]. " - " .$matches[$i]["squadra-ospite"]. " | "
                .$matches[$i]["punteggio-casa"]. " - " .$matches[$i]["punteggio-ospite"];
            }
        ?>
    </li>
</body>
</html>