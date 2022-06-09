<?php
session_start();

if (!$_SESSION["login"]) {
    header("Location: " . "../index.php");
    die();
}

$name_cat = $_GET['SearchPlaceHolder'];

if (isset($_GET["Search"])) {
    if ($name_cat) {
        setcookie("SearchCookie", $name_cat, time() + 600);
        header("Location: " . "shop.php");
    }
}

if (isset($_GET["toCart"]))
    header("Location: " . "busket.php");

if (isset($_GET["ToLogin"]))
    header("Location: " . "login.php");

if (isset($_GET["toProfile"]))
    header("Location: " . "profile.php");


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_kotiki';

require_once "../classes/DataBase.php";

$database = DataBase::getInstance($hostname, $username, $password, $dbname);

$user_id = $_SESSION['id'];



if (isset($_GET['buy'])) {
    $query = "UPDATE `orders` SET `purchased`='1' WHERE id_User = $user_id";
    $update = $database->query($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="<? echo file_get_contents("../file/KeyWords.txt") ?>">
    <meta name="description" content="<? echo file_get_contents("../file/DescriptionSite.txt") ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link type="image/x-icon" rel="icon" href="../favicon/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl, option)
        })
    </script>
    <script src="https://kit.fontawesome.com/0be61fa4f3.js" crossorigin="anonymous"></script>
    <link href="../css/contact.css" rel="stylesheet">
    <link href="../css/shop.css" rel="stylesheet">
    <link href="../css/wrapper.css" rel="stylesheet">
    <link href="../css/busket.css" rel="stylesheet">
    <title>&#128049;CSHOP&#128049;</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <link href="http://localhost/CoolCats/css/header.css" rel="stylesheet">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"> <a href="../index.php"><img class="logo-img" src="../favicon/logo.png">
                                </a></li>
                            <li class="nav-item"> <a class="nav-link" aria-current="page" href="../index.php">Главная</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="catalog.php">Каталог</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <form>
                                <input class="form-control me-2" type="search" placeholder="Искать котика" aria-label="Search" name="SearchPlaceHolder">
                                <button class="btn btn-outline-light search" type="submit" name="Search">Поиск</button>
                                <?
                                session_start();
                                if (isset($_SESSION['login'])) :
                                ?>
                                    <a href="busket.php"> <button class="btn text-light icon d-flex" name="toCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                            </svg>
                                        </button></a>
                                    <button class="btn text-light icon d-flex" name="toProfile">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                    </button>
                                <? else : ?>
                                    <button class="btn btn-outline-light" type="submit" name="ToLogin">Войти</button>
                                <? endif ?>
                            </form>
                        </div>
                    </div>
            </nav>
        </header>
        <main class="main">
            <div class="page-breadcrumb">
                <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Профиль</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Корзина</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <?
                $user_id = $_SESSION['id'];
                $order = $database->select_query("
                    SELECT * FROM `orders`
                    JOIN kotiki
                        ON orders.id_Kotik = kotiki.id
                    JOIN users
                        ON orders.id_User = users.id
                    WHERE orders.purchased = 0 AND users.id = $user_id");
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="sort-box">
                            <div class="sort-box-left">
                                <span>Вы хотите купить <?=count($order)?> котика</span>
                            </div>

                        </div>
                        <ul class="list-group shop-list">
                                <?$sum = 0?>
                                <?foreach ($order as $value):?>
                                    <li class="list-group-item">
                                        <div class="product-box">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="product-img-box">
                                                        <a href="kotik.php"><img class="product-img"
                                                                src="../<?=$value["url_picture"]?>"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 position-relative">
                                                    <div class="border-right"></div>
                                                    <div class="product-price">
                                                        <span class="product-price-reg"><?echo number_format($value["price"], 0, ",", " ")?> руб.</span>
                                                    </div> <a href="kotik.php" class="product-title">
                                                        <?=$value["name"]?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?$sum += $value["price"];?>
                                <?endforeach?>
                        </ul>
                        <div class="buying">
                            <h5>Мы сделали подсчеты лапками</h5>
                            <p>Эти классные котики обойдутсвя вам <span class="price"><?echo number_format($sum, 0, ",", " ")?> руб.</span> Хотите их
                                купить?</p>
                        </div>
                        <form class="buy-form">
                            <button class="btn btn-primary" name="buy">Да Да Да Купить!</button>
                        </form>

                    </div>
                </div>
            </div>
        </main>
        <?
        require_once '../includes/footer.php';
        ?>
    </div>




</body>

</html>