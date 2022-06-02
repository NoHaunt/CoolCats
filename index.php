<!Doctype html>
<html>
<?
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_kotiki';

require_once "classes/DataBase.php";

$database = DataBase::getInstance($hostname, $username, $password, $dbname);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link href="css/index.css" rel="stylesheet">
    <title>&#128049;CSHOP&#128049;</title> <!--//&#128049; (cat emoji)-->
</head>

<body>
    <?
        require_once 'includes/header.php';
        //https://www.avito.ru/schelkovo/koshki/selkirk-reks_2391810026
    ?>
    <main>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item head-img-1 active" data-bs-interval="10000">
                    <div class="carousel-caption d-md-block">
                       
                    </div>
                    <img class="d-block carousel-img h-100" src="img/abis-cat.jpg" alt="">
                </div>
                <div class="carousel-item head-img-2" data-bs-interval="2000">
                    <div class="carousel-caption d-md-block">
                       
                    </div>
                </div>
                <div class="carousel-item head-img-3">
                    <div class="carousel-caption d-md-block">
                       
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                    class="visually-hidden">Предыдущий</span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span
                    class="visually-hidden">Следующий</span> </button>
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
                                        WHERE name = 'Мейн-кун'");
                                ?>
                                <div class="card" style="width: 228px;height:400px">
                                    <div class="card-img">
                                        <a href="#"> <img src="<?=$select['url_picture']?>" class="card-img-top" alt="..."></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Мейн-кун</h5>
                                        <p class="card-text" style="text-align:center;"><span class="price-del">85 000
                                                руб.</span>
                                                <span class="price-reg">
                                                    <?echo number_format($select["price"], 0, ",", " ")?> руб.
                                                </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <?
                                $select = $database->select_query("
                                    SELECT * FROM Kotiki
                                        WHERE name = 'Британская золотая шиншилла'");
                                ?>
                                <div class="card" style="width: 228px;height:400px">
                                    <div class="card-img">
                                        <a href="#"><img src="<?=$select['url_picture']?>" class="card-img-top" alt="..."></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Британская золотая шиншилла</h5>
                                        <p class="card-text" style="text-align:center;"><span class="price-del">30 000
                                                руб.</span> <span class="price-reg"><?echo number_format($select["price"], 0, ",", " ")?> руб.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <?
                                $select = $database->select_query("
                                    SELECT * FROM Kotiki
                                        WHERE name = 'Абиссинский котенок'");
                                ?>
                                <div class="card" style="width: 228px;height:400px">
                                    <div class="card-img">
                                        <a href="#"><img src="<?=$select['url_picture']?>" class="card-img-top" alt="..."></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Абиссинский котенок</h5>
                                        <p class="card-text" style="text-align:center;"><span class="price-del">50 000
                                                руб.</span> <span class="price-reg"><?echo number_format($select["price"], 0, ",", " ")?> руб.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <?
                                $select = $database->select_query("
                                    SELECT * FROM Kotiki
                                        WHERE name = 'Шотландский котенок'");
                                ?>
                                <div class="card" style="width: 228px; height:400px;">
                                    <div class="card-img">
                                        <a href="#"><img src="<?=$select['url_picture']?>" class="card-img-top" alt="..."></a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Шотландский котенок</h5>
                                        <p class="card-text" style="text-align:center;"><span class="price-del">20 000
                                                руб.</span> <span class="price-reg"><?echo number_format($select["price"], 0, ",", " ")?> руб.</span></p>
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