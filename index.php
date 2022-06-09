<?
session_start();
$name_cat = $_GET['SearchPlaceHolder'];

if (isset($_GET["Search"])) {
    if ($name_cat) {
        setcookie("SearchCookie", $name_cat, time() + 3600);
        header("Location: " . "pages/shop.php");
    }
}

if (isset($_GET["toCart"]))
    header("Location: " . "pages/busket.php");

if (isset($_GET["ToLogin"]))
    header("Location: " . "pages/login.php");

if (isset($_GET["toProfile"]))
    header("Location: " . "pages/profile.php");

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_kotiki';

require_once "classes/DataBase.php";

$database = DataBase::getInstance($hostname, $username, $password, $dbname);

$name_cat = $_GET['Search'];

if (isset($search)) {
    if ($name_cat) {
        $database->select_query("
            SELECT * FROM Kotiki
            WHERE name = $name_cat");
    }
}
?>
<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="<? echo file_get_contents("files/KeyWords.txt") ?>">
    <meta name="description" content="<? echo file_get_contents("files/DescriptionSite.txt") ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/wrapper.css" rel="stylesheet">
    <link type="image/x-icon" rel="icon" href="favicon/logo.png">
    <title>&#128049;CSHOP&#128049;</title>
    <!--//&#128049; (cat emoji)-->
</head>

<body>
    <header class="header">
        <link href="http://localhost/CoolCats/css/header.css" rel="stylesheet">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"> <a href="index.php"><img class="logo-img" src="favicon/logo.png"> </a></li>
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Главная</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="pages/catalog.php">Каталог</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <form>
                            <input class="form-control me-2" type="search" placeholder="Искать котика" aria-label="Search" name="SearchPlaceHolder">
                            <button class="btn btn-outline-light search" type="submit" name="Search">Поиск</button>
                            <?
                                if (isset($_SESSION['login'])) :
                            ?>
                                <a href="pages/busket.php"> <button class="btn text-light icon d-flex" name="toCart">
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
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item head-img-1 active" data-bs-interval="10000">
                    <div class="carousel-caption d-md-block">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8 carousel-container">
                                <img class="carousel-img" src="img/abis-cat.jpg" alt="">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item head-img-2" data-bs-interval="2000">
                    <div class="carousel-caption d-md-block">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8 carousel-container">
                                <img class="carousel-img" src="img/britain-gold.jpg" alt="">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item head-img-3">
                    <div class="carousel-caption d-md-block">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8 carousel-container">
                                <img class="carousel-img w-100" src="img/Main-Kun.jpg" alt="">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Предыдущий</span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Следующий</span> </button>
        </div>
        <div class="Hot_deals">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content">
                            <h5 class="section-content-title">Самые самые котики!</h5>
                        </div>
                    </div>
                </div>
                <div class="Hot_deals_items">
                    <div class="container">
                        <div class="row">
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <?
                                $select = $database->select_query("
                                    SELECT * FROM Kotiki
                                        WHERE name = 'Мейн-кун'
                                        LIMIT 1");
                                ?>
                                <div class="card" style="width: 228px;height:400px">
                                    <div class="card-img">
                                        <a href="#"> <img class="cat-img" src="<?= $select[0]['url_picture'] ?>" class="card-img-top" alt="..."></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Мейн-кун</h5>
                                        <p class="card-text" style="text-align:center;">
                                            <span class="price-reg">
                                                <? echo number_format($select[0]["price"], 0, ",", " ") ?> руб.
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <?
                                $select = $database->select_query("
                                    SELECT * FROM Kotiki
                                        WHERE name = 'Британская золотая шиншилла'
                                        LIMIT 1");
                                ?>
                                <div class="card" style="width: 228px;height:400px">
                                    <div class="card-img">
                                        <a href="#"><img class="cat-img" src="<?= $select[0]['url_picture'] ?>" class="card-img-top" alt="..."></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Британская золотая шиншилла</h5>
                                        <p class="card-text" style="text-align:center;"><span class="price-reg">
                                                <? echo number_format($select[0]["price"], 0, ",", " ") ?> руб.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <?
                                $select = $database->select_query("
                                    SELECT * FROM Kotiki
                                        WHERE name = 'Абиссинский котенок'
                                        LIMIT 1");
                                ?>
                                <div class="card" style="width: 228px;height:400px">
                                    <div class="card-img">
                                        <a href="#"><img class="cat-img" src="<?= $select[0]['url_picture'] ?>" class="card-img-top" alt="..."></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Абиссинский котенок</h5>
                                        <p class="card-text" style="text-align:center;"> <span class="price-reg">
                                                <? echo number_format($select[0]["price"], 0, ",", " ") ?> руб.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <?
                                $select = $database->select_query("
                                    SELECT * FROM Kotiki
                                        WHERE name = 'Шотландский котенок'
                                        LIMIT 1");
                                ?>
                                <div class="card" style="width: 228px; height:400px;">
                                    <div class="card-img">
                                        <a href="#"><img class="cat-img" src="<?= $select[0]['url_picture'] ?>" class="card-img-top" alt="..."></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Шотландский котенок</h5>
                                        <p class="card-text" style="text-align:center;"> <span class="price-reg">
                                                <? echo number_format($select[0]["price"], 0, ",", " ") ?> руб.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?
    require_once 'includes/footer.php';
    ?>
</body>

</html>