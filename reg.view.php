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
    <span class="error"><?= $_SESSION["errorTwo"];?></span>
<div class="content-box">
    <h3>Регистрация</h3>
    <form method="post" action="action.php" enctype="multipart/form-data">

        <label for="exampleInputEmail1">Введите логин</label>
        <br>
        <input type="text" id="exampleInputEmail1" name="loginReg" class="authorization-input" placeholder="Логин...">
        <br>

        <label for="exampleInputEmail2">Введите пароль</label>
        <br>
        <input type="password" id="exampleInputEmail2" name="passwordReg" class="authorization-input" placeholder="Пароль...">
        <br>
        <label for="exampleInputEmail2">Введите никнейм</label>
        <br>
        <input type="text" id="exampleInputEmail2" name="nicknameReg" class="authorization-input" placeholder="Имя..."><br>

        <label for="exampleInputEmail2">Укажите название картинки</label><br>
        <input type="file" id="exampleInputEmail2" name="imageReg" class="authorization-input"><br>

        <button type="submit" class="btnbtn-primary authorization-button" name="btnOk">Зарегистрироваться</button>
    </form>
</div>
</body>

</html>