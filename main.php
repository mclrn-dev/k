<?php
session_start();
require_once "Connection.php";
require_once "bootstrap.php";
if (!$_SESSION["auth"]) {
    header("Location: index.php");
    die();
}

$s=$data->showUserData();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="exit.php" class="exit">Выход</a>
        <?php foreach ($s as $item) : ?>
            <div class="card-box">
                <img src="image/<?= $item->name_img;"" ?>" class="icon"><h3 id="user-title"><?= $item->nik; ?></h3><div id="card-content"><br><hr>
                        Логин: <p><?= $item->login; ?></p>
                        Никнейм: <p><?= $item->nik; ?></p>
                        Пароль: <p><?= $item->password; ?></p>
                        </div>
            </div>
        <?php endforeach; ?>
</body>

</html>