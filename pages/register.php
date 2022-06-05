<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_kotiki';
$database = mysqli_connect($hostname, $username, $password, $dbname);

require_once "../classes/Regi.php";


$data = $_POST;
$new_url = '../index.php';

if (isset($data['enter'])) {
    $check_regi = new Regi($database);
    if ($check_regi->registration($data) == 1)
        header('Location: ' . $new_url);
    else
        echo 'Пароли должны быть одинаковыми';
}
?>
<!DOCTYPE html>
<html>

<head lang="ru" lang="en">
    <title>&#128049;CatRegister&#128049;</title>
    <meta charset="utf-8">
    <meta name="Keywords" content="<? echo file_get_content("../file/KeyWords.txt") ?>">
    <meta name="description" content="<? echo file_get_content("../file/DescriptionSite.txt") ?>">
    <script src="../vendor/js/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/0be61fa4f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/auth.css">
</head>

<body>
    <form method="post" class="login-form">
        <h1>Регистрация</h1>

        <div class="box">
            <input type="text" name="login" required> <span data-placeholder="Логин"></span>
        </div>
        <div class="box">
            <input type="password" name="password" required> <span data-placeholder="Пароль"></span>
        </div>
        <div class="box">
            <input type="password" name="rpassword" required> <span data-placeholder="Подтвердите пароль"></span>
        </div>
        <input type="submit" name="enter" class="signin" value="Зарегистрироваться">
    </form>
    <script src="../js/auth.js"></script>
</body>

</html>