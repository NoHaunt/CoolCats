<!DOCTYPE html>
<html>

<head lang="ru" lang="en">
    <title>&#128049;CatLogin&#128049;</title>
    <meta charset="utf-8">
    <script src="../vendor/js/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/0be61fa4f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/auth.css">

</head>

<body>
    <form action="loginpage.html" class="login-form">
        <h1>Авторизация</h1>
        <div class="box">
            <input type="text"> <span data-placeholder="Логин"></span> </div>
        <div class="box">
            <input type="password"> <span data-placeholder="Пароль"></span> </div>
        <input type="submit" class="signin" value="Login">
        <div class="bottom-txt">Ещё не зарегистрированы? <a href="register.php">Зарегистрироваться</a></div>
    </form>
    <script src="../js/auth.js"></script>
</body>

</html>