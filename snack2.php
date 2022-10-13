<?php

$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';
$email = $_GET['mail'] ?? '';

$name_check = false;
$email_check = false;
$age_check = false;

if (isset($_GET['name']) && strlen($name) > 3) {
    $name_check = true;
}

if (isset($_GET['mail']) && strpos($email,  '.') && strpos($email, '@')) {
    $email_check = true;
}
if (isset($_GET['age']) && is_numeric($age)) {

    $age_check = true;;
}

if ($name_check === true && $email_check === true && $age_check === true) {
    echo "ACCESSO AUTORIZZATO";
} elseif ($name === "" && $email === "" && $age === "") {
    echo "VERIFICA";
} else {
    echo "ACCESSO NEGATO";
}
?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>
    </h1>
    <form action="" method="GET">
        <input type="text" placeholder="name" name="name">
        <input type="mail" placeholder="mail" name="mail">
        <input type="text" placeholder="age" name="age">
        <button type="submit">Invia</button>
        <p><? ?></p>
    </form>
</body>

</html>