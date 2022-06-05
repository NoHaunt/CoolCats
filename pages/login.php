<?
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_kotiki';

require_once "../classes/DataBase.php";

$database = DataBase::getInstance($hostname, $username, $password, $dbname);


function checkLogin($data, $login, $password)
{
    $password = hash("md5", $password);

    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i]["login"] == $login and $data[$i]["password"] == $password) {
            if ($data[$i]["is_Admin"])
                return [$data[$i]["id"], "Admin"];
            else
                return [$data[$i]["id"], "User"];
        }
    }

    return false;
}
?>

<!DOCTYPE html>
<html>

<head lang="ru" lang="en">
    <title>&#128049;CatLogin&#128049;</title>
    <meta charset="utf-8">
    <meta name="Keywords" content="<? echo file_get_contents("../file/KeyWords.txt") ?>">
    <meta name="description" content="<? echo file_get_contents("../file/DescriptionSite.txt") ?>">
    <script src="../vendor/js/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/0be61fa4f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/auth.css">

</head>

<body>
    <form method="post" class="login-form">
        <h1>Авторизация</h1>
        <div class="box">
            <input name="login" type="text" required> <span data-placeholder="Логин"></span>
        </div>
        <div class="box">
            <input name="password" type="password" required> <span data-placeholder="Пароль"></span>
        </div>
        <input name="submit" type="submit" class="signin" value="Login">
        <div class="bottom-txt">Ещё не зарегистрированы? <a href="register.php">Зарегистрироваться</a></div>
    </form>
    <script src="../js/auth.js"></script>
</body>

</html>

<?
if (isset($_POST['submit'])) {
    $array_users = $database->select_query("SELECT * FROM users");

    $role = checkLogin($array_users, $_POST['login'], $_POST['password']);

    if ($role) {
        session_start();

        $_SESSION['id'] = $role[0];
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['role'] = $role[1];
        header("Location: " . "../index.php");
    } else
        echo "Неправильный ввод данных, проверьте логин или пароль, который вы написали";
}
?>