<?php
/*Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.*/

$class = [
    [
        "name" => "Martina",
        "surname" => "Nero",
        "votes" => [6, 7, 6, 5, 8]
    ],
    [
        "name" => "Marta",
        "surname" => "Rossi",
        "votes" => [3, 6, 3, 6, 7]
    ],
    [
        "name" => "Giulio",
        "surname" => "Verde",
        "votes" => [4, 6, 7, 8, 5]
    ],
    [
        "name" => "Nicola",
        "surname" => "Bianco",
        "votes" => [3, 4, 5, 2, 4]
    ],
    [
        "name" => "Cristiano",
        "surname" => "Gialli",
        "votes" => [6, 9, 6, 10, 8]
    ],
];
$sumVotes = 0;
$media = 0;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>La Classe</h1>
    <div>
        <?php foreach ($class as $alumn) : ?>
            <div>
                <h3>Alunno:</h3>
                <p>Nome: <?= $alumn["name"] ?></p>
                <p>Cognome: <?= $alumn["surname"] ?></p>
                <?php for ($i = 0; $i < count($alumn["votes"]); $i++) {
                    $sumVotes += $alumn["votes"][$i];
                };

                $media = $sumVotes / count($alumn["votes"]);
                $sumVotes = 0
                ?>
                <p>Media dei voti: <?= number_format($media, 1) ?></p>
            </div>
        <?php endforeach ?>
    </div>
</body>

</html>