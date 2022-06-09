<?php
session_start();
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_kotiki';

require_once "../classes/DataBase.php";
require_once "../classes/Regi.php";


$database = DataBase::getInstance($hostname, $username, $password, $dbname);

$data = $_POST;
$user_login = $data['login'];
$new_url = '../index.php';
$query = "SELECT login FROM users WHERE login = '$user_login'";
$select = $database->select_query($query);
if (isset($data['enter'])) {
    $check = true;
    foreach ($select as $value) {
        if ($value["login"] == $user_login)
            echo 'Такой логин уже занят, но вы можете попробывать ' . $user_login . '228';
        $check = false;
        break;
    }

    $databaseRegi = mysqli_connect($hostname, $username, $password, $dbname);

    if ($check) {
        $check_regi = new Regi($databaseRegi);
        if ($check_regi->registration($data) == 1){
            $query = "SELECT * FROM users WHERE login = '$user_login'";

            $select = $database->select_query($query);

            $_SESSION['id'] = $select[0]["id"];
            $_SESSION['login'] = $select[0]['login'];
            $_SESSION['password'] = $select[0]['password'];
            $_SESSION['role'] = "User";

            header('Location: ' . $new_url);
        }
        else
            echo 'Пароли должны быть одинаковыми';
    }
}
?>
<!DOCTYPE html>
<html>

<head lang="ru" lang="en">
    <title>&#128049;CatRegister&#128049;</title>
    <meta charset="utf-8">
    <meta name="Keywords" content="<? echo file_get_contents("../files/KeyWords.txt") ?>">
    <meta name="description" content="<? echo file_get_contents("../files/DescriptionSite.txt") ?>">
    <script src="../vendor/js/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/0be61fa4f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/auth.css">
    <link type="image/x-icon" rel="icon" href="../favicon/logo.png">
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