<?
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

if (isset($_POST["submitPassword"])) {
    $check = ($_POST['password'] == $_POST['passwordCheck']);

    $password = hash("md5", $_POST['password']);

    $login = $_SESSION['login'];

    if ($check) {
        $insert = $database->query("UPDATE users SET password = '$password' WHERE login = '$login'");
        setcookie("passwordCheck", "truePassword", time() + 60);
    } else {
        setcookie("passwordCheck", "falsePassword", time() + 60);
    }
}

if (isset($_POST["exit"])) {
    session_unset();
    header("Location: " . "../index.php");
    die();
}

if (isset($_POST["addCat"])) {
    $name_insert_cat = $_POST["nameCat"];
    $description_cat = $_POST["descriptionCat"];
    $price_cat = (int)$_POST["priceCat"];
    $image_cat = $_FILES['imageCat'];
    $image_way = 'img/' . $image_cat["name"];
    copy($image_cat['tmp_name'], "../" .  $image_way);

    $insert = $database->query("INSERT INTO `kotiki`(`id`, `name`, `description`, `price`, `url_picture`)
        VALUES (null, '$name_insert_cat', '$description_cat', $price_cat, '$image_way')");
}

if (isset($_POST["keyWordsSite"])) {
    file_put_contents("../files/KeyWords.txt", $_POST["KeyWords"]);
}

if (isset($_POST["descriptionSiteSubmit"])) {
    file_put_contents("../files/DescriptionSite.txt", $_POST["DescriptionSite"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="<? echo file_get_contents("../files/KeyWords.txt") ?>">
    <meta name="description" content="<? echo file_get_contents("../files/DescriptionSite.txt") ?>">
    <link type="image/x-icon" rel="icon" href="../favicon/logo.png">
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
    <link href="../css/busket.css" rel="stylesheet">
    <link href="../css/profile.css" rel="stylesheet">
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
                            <li class="nav-item"> <a class="nav-link" aria-current="page" href="../index.php">??????????????</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="catalog.php">??????????????</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <form>
                                <input class="form-control me-2" type="search" placeholder="???????????? ????????????" aria-label="Search" name="SearchPlaceHolder">
                                <button class="btn btn-outline-light search" type="submit" name="Search">??????????</button>
                                <?
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
                                    <button class="btn btn-outline-light" type="submit" name="ToLogin">??????????</button>
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
                                    <li class="breadcrumb-item"><a href="../index.php">??????????????</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="profile-container container">
                            <form method="post" class="d-block">
                                <h4 class="head-text">??????????????</h4>
                                <div class="profile-border"></div>
                                <h5 class="head-text">???????????????? ????????????</h5>
                                <div class="col-3">
                                    <input type="text" name="password" class="form-control head-text" placeholder="?????????? ????????????">
                                </div>
                                <div class="col-3"><input type="text" name="passwordCheck" class="form-control head-text" placeholder="?????????????????????????? ????????????"></div>
                                <button name="submitPassword" class="head-text btn btn-primary">?????????????? ????????????</button>
                                <? if ($_COOKIE['passwordCheck'] == "falsePassword") : ?>
                                    <p class="error-change">???????????? ???????????? ???? ??????????????????</p>
                                <? endif ?>
                                <div class="form-group">
                                    <button name="exit" class="btn btn-danger head-text">??????????</button>
                                </div>
                            </form>
                            <? if ($_SESSION['role'] == "Admin") : ?>
                                <div class="admin-panel">
                                    <h5>???????????? ????????????</h5>
                                    <form method="post" class="d-block">
                                        <div class="profile-border"></div>
                                        <h5 class="head-text">???????????????? ????????????????????</h5>
                                        <div class="form-group col-7">
                                            <textarea class="form-control" name="KeyWords" placeholder="???????????????? ??????????"></textarea>
                                        </div>
                                        <button name="keyWordsSite" class="btn btn-primary head-text">???????????????? ???????????????? ??????????</button>
                                        <div class="form-group head-text col-7">
                                            <textarea class="form-control" name="DescriptionSite" placeholder="???????????????? ??????????"></textarea>
                                        </div>
                                        <button name="descriptionSiteSubmit" class="btn btn-primary head-text">???????????????? ????????????????</button>
                                    </form>
                                    <form method="post" enctype="multipart/form-data" class="d-block">
                                        <h5 class="head-text">???????????????? ???????????? ????????????</h5>
                                        <div class="form-group col-3">
                                            <label>???????????????? ????????????</label>
                                            <input name="nameCat" type="text" class="form-control" placeholder="???????????????????????? ????????????" required>
                                        </div>
                                        <div class="form-group col-7">
                                            <label>???????????????? ????????????</label>
                                            <textarea name="descriptionCat" class="form-control" name="DescriptionCat" placeholder="???????????????? ????????????"></textarea>
                                        </div>
                                        <div class="form-group col-3">
                                            <label>???????? ????????????</label>
                                            <input name="priceCat" type="text" class="form-control" name="price" placeholder="???????? ????????????" required>
                                        </div>
                                        <div class="form-group col-3 head-text">
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input name="imageCat" type="file" class="form-control-file" id="exampleFormControlFile1" name="cat-img" required>
                                        </div>
                                        <button name="addCat" class="head-text btn btn-primary">???????????????? ????????????</button>
                                    </form>

                                </div>
                            <? endif ?>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?
        require_once '../includes/footer.php';
        ?>
</body>

</html>