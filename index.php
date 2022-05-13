<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link href="css/index.css" rel="stylesheet">
    <title>CSHOP</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Главная</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/shop.html">Каталог</a> </li>
                </ul>
                <div class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Искать котика" aria-label="Search"
                        name="SearchPlaceHolder">
                    <button class="btn btn-outline-light" type="submit" name="Search">Поиск</button>
                    <button class="btn text-light d-flex" name="toCart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-cart2" viewBox="0 0 16 16">
                            <path
                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                    </button>
                    </form>
                </div>
            </div>
    </nav>
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
                        <h2 class="b-100">SMART TV 4K</h2>
                        <h2>QLED 75 INCH Q7F</h2>
                        <br>
                        <p>Exclusive Offer <span class="sale">-20% Off</span> This Week</p>
                    </div>
                </div>
                <div class="carousel-item head-img-2" data-bs-interval="2000">
                    <div class="carousel-caption d-md-block">
                        <h2 class="b-100">MICROWAVE</h2>
                        <h2>TOASTER OVEN 2019</h2>
                        <br>
                        <p>Exclusive Offer <span class="sale">-20% Off</span> This Week</p>
                    </div>
                </div>
                <div class="carousel-item head-img-3">
                    <div class="carousel-caption d-md-block">
                        <h2 class="b-100">SAMSUNG GALAXY</h2>
                        <h2>GALAXY S9 / S9+</h2>
                        <br>
                        <p>Exclusive Offer <span class="sale">-20% Off</span> This Week</p>
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
                            <h5 class="section-content-title">Самые популярные котики</h5>
                        </div>
                    </div>
                </div>
                <div class="Hot_deals_items">
                    <div class="container">
                        <div class="row">
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <div class="card" style="width: 228px;height:400px">
                                    <a href="#"> <img src="img/Main-Kun.jpg" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Мейн-кун</h5>
                                        <p class="card-text" style="text-align:center;"><span class="price-del">85 000
                                                руб.</span> <span class="price-reg">65 000 руб.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <div class="card" style="width: 228px;height:400px">
                                    <a href="#"><img src="img/britain-gold.jpg" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Британская золотая шиншилла</h5>
                                        <p class="card-text" style="text-align:center;"><span class="price-del">30 000
                                                руб.</span> <span class="price-reg">25 000 руб.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <div class="card" style="width: 228px;height:400px">
                                    <a href="#"><img src="img/abis-cat.jpg" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Абиссинский котенок</h5>
                                        <p class="card-text" style="text-align:center;"><span class="price-del">50 000
                                                руб.</span> <span class="price-reg">40 000 руб.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-lg-3 col-12">
                                <div class="card" style="width: 228px; height:400px;">
                                    <a href="#"><img src="img/scot-cat.jpg" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Шотландский котенок</h5>
                                        <p class="card-text" style="text-align:center;"><span class="price-del">20 000
                                                руб.</span> <span class="price-reg">15 000 руб.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer font-small bg-primary">
        <div class="footer-copyright text-white text-center py-3">©Whiskas</div>
    </footer>
</body>

</html>