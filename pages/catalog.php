<?
$name_cat = $_GET['SearchPlaceHolder'];

if (isset($_GET["Search"])) {
    if ($name_cat) {
        setcookie("SearchCookie", $name_cat, time() + 600);
        header("Location: " . "shop.php");
    }
}

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_kotiki';

require_once "../classes/DataBase.php";

$database = DataBase::getInstance($hostname, $username, $password, $dbname);
?>

<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
                            <li class="nav-item"> <a href="../index.php"><img class="logo-img" src="../favicon/logo.png"> </a></li>
                            <li class="nav-item"> <a class="nav-link" aria-current="page" href="../index.php">Главная</a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="shop.php">Каталог</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <form>
                                <input class="form-control me-2" type="search" placeholder="Искать котика" aria-label="Search" name="SearchPlaceHolder">
                                <button class="btn btn-outline-light search" type="submit" name="Search">Поиск</button>
                                <?
                                session_start();
                                if (isset($_SESSION['login'])):
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
                                <?else:?>
                                    <button class="btn btn-outline-light" type="submit" name="ToLogin">Войти</button>
                                <?endif?>
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
                                    <li class="breadcrumb-item"><a href="../index.php">Домашняя</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Каталог</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <?
                $countCats = 0;
                $select = $database->select_query("
                    SELECT * FROM Kotiki");

                if ($select)
                    $countCats = count($select);
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="sort-box">
                            <div class="sort-box-left">
                                <div class="sort-box-tab">
                                    <ul class="sort-box-tab-list nav">

                                        <li><a class="sort-nav-link active" data-toggle="tab" href="#"><i class="fas fa-list"></i></a></li>
                                    </ul>
                                </div> <span>Всего <?=$countCats?> кульных котика</span>
                            </div>
                            <div class="sort-box-right"> <span>Сортировать:</span>
                                <div class="sort-box-option">
                                    <label class="select-sort-arrow">
                                        <select name="select-sort" class="select-sort">
                                            <option value="1">От А до Я</option>
                                            <option value="2">От Я до А</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <?if($select):?>
                        <ul class="list-group shop-list">
                            <?foreach($select as $cat):?>
                            <li class="list-group-item">
                                <div class="product-box">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-img-box">
                                                <a href="kotik.php"><img class="product-img" src="../<?=$cat["url_picture"]?>"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-5 position-relative">
                                            <div class="border-right"></div>
                                            <div class="product-price">
                                                <span class="product-price-reg"><?echo number_format($cat["price"], 0, ",", " ");?> руб.</span>
                                            </div> <a href="kotik.php" class="product-title">
                                                <?=$cat["name"]?>
                                            </a>
                                            <div class="product-description">
                                                <p><?=$cat["description"]?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="shop-list-link">
                                                <li>
                                                    <button class="btn btn-outline-primary">Добавить в корзину</button>
                                                </li>
                                                <li><a href="kotik.php" class="Quick-view"><i class="far fa-eye"></i>Просмотр</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?endforeach?>
                        </ul>
                        <?endif?>
                        
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