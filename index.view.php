<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <div class="content-box">
<p>Войди или <a href='reg.php'>Зарегистрируйся</a></p>

<form method="post">
<br>
<label for="exampleInputEmail1">Введите логин</label><br>
<input type="text" id="exampleInputEmail1" name="login" class="authorization-input" placeholder="Логин..." required><br>
<br>
<label for="exampleInputEmail2">Введите пароль</label><br>
<input type="password" id="exampleInputEmail2" name="password" class="authorization-input" placeholder="Пароль..." required><br>
<br>
<button type="submit" class="authorization-button" name="btnOK">Вход</button>
</form>
    </div>
</body>
</html>