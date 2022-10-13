<?php

/*Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/


$basket_matches = [
    [
        "homeTeam" => "EA7 EMPORIO ARMANI MILANO",
        "opponentTeam" => "GERMANI BRESCIA",
        "homePoints" => 78,
        "opponentPoints" => 77,
    ],
    [
        "homeTeam" => "NUTRIBULLET TREVISO BASKET",
        "opponentTeam" => "UNAHOTELS REGGIO EMILIA",
        "homePoints" => 58,
        "opponentPoints" => 78,
    ],
    [
        "homeTeam" => "BERTRAM YACHTS DERTHONA TORTONA",
        "opponentTeam" => "DOLOMITI ENERGIA TRENTINO",
        "homePoints" => 76,
        "opponentPoints" => 70,
    ],
    [
        "homeTeam" => "TEZENIS VERONA",
        "opponentTeam" => "HAPPY CASA BRINDISI",
        "homePoints" => 100,
        "opponentPoints" => 97,
    ],
    [
        "homeTeam" => "UMANA REYER VENEZIA",
        "opponentTeam" => "GIVOVA SCAFATI",
        "homePoints" => 80,
        "opponentPoints" => 69,
    ],
    [
        "homeTeam" => "PALLACANESTRO TRIESTE",
        "opponentTeam" => "CARPEGNA PROSCIUTTO PESARO",
        "homePoints" => 74,
        "opponentPoints" => 100,
    ],
    [
        "homeTeam" => "OPENJOBMETIS VARESE",
        "opponentTeam" => "BANCO DI SARDEGNA SASSARI",
        "homePoints" => 87,
        "opponentPoints" => 81,
    ],
    [
        "homeTeam" => "GEVI NAPOLI BASKET",
        "opponentTeam" => "VIRTUS SEGAFREDO BOLOGNA",
        "homePoints" => 77,
        "opponentPoints" => 89,
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
</head>

<body>
    <h1>1° GIORNATA</h1>
    <div class="box">
        <div>
            <h4>Squadra di Casa</h4>
        </div>
        <div>
            <h4>Punteggio</h4>
        </div>
        <div>
            <h4>Squadra Ospite</h4>
        </div>
    </div>
    <?php
    foreach ($basket_matches as $match) : ?>
        <div class="box">
            <div>
                <p> <?php echo $match["homeTeam"] ?></p>
            </div>
            <div>
                <?php
                if ($match["homePoints"] > $match["opponentPoints"]) {
                    echo "<p> <span class='green'>VINTO </span>" . $match["homePoints"] . " : " . $match["opponentPoints"] . "</p>";
                } else {
                    echo "<p>  <span class='red'>PERSO </span>" . $match["homePoints"] . " : " . $match["opponentPoints"] . "</p>";
                }
                ?>
            </div>
            <div>
                <p> <?php echo $match["opponentTeam"] ?></p>
            </div>
        </div>
    <?php endforeach ?>
</body>

</html>

<style>
    .green {
        color: green;
    }

    .red {
        color: red;
    }

    h1 {
        text-align: center;
    }

    h4 {
        color: blue;
    }

    .box {
        display: flex;
        width: 70%;
        margin: 50px auto;
    }

    .box>div {
        width: calc(100% / 3);
        text-align: center;
    }

    .title {
        color: red;
    }
</style>