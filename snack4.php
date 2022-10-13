<?php
/*Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.*/

$text = "Two men gave the career presentation that day. The first was young and handsome, but his twisted half-smile made him look like he was fighting the urge to fall to his knees and curse his fate. He wore a black hat with a spike like a video game character. But aside from those afflictions, he was the type of man who normally made us students pay attention.© Anne Winchell"



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
    <h1>Spezziamo il paragrafo </h1>
    <h4>Paragrafo originale</h4>
    <p><?= $text ?></p>
    <h4>Paragrafo spezzato ad ogni "."</h4>
    <?php
    $arrayTextExpoled = explode(".", $text);
    foreach ($arrayTextExpoled as $partoftext) :
    ?>
        <p><?= $partoftext ?></p>
    <?php endforeach ?>

</body>

</html>