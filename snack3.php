<?php
/*Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z*/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$date_key = array_keys($posts);
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
    <h1>I miei posts</h1>
    <div>
        <?php foreach ($date_key as $data) : ?>
            <ul><?= $data ?></ul>
            <?php for ($i = 0; $i < count($posts[$data]); $i++) : ?>
                <div class="listbox">
                    <li><?= "Titolo: " . $posts[$data][$i]["title"] ?></li>
                    <li><?= "Autore:" . $posts[$data][$i]["author"] ?></li>
                    <li><?= "Testo:" . $posts[$data][$i]["text"] ?></li>
                </div>
            <?php endfor ?>
        <?php endforeach ?>
    </div>
</body>

</html>

<style>
    .listbox {
        margin: 50px 80px;
    }

    li {
        list-style-type: none;
    }
</style>