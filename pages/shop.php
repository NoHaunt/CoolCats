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
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, option)
        })
    </script>
    <script src="https://kit.fontawesome.com/0be61fa4f3.js" crossorigin="anonymous"></script>
    <link href="../css/contact.css" rel="stylesheet">
    <link href="../css/shop.css" rel="stylesheet">
    <title>CSHOP</title>
</head>

<body>
    <?
        require_once '../includes/header.php';
    ?>
    <div class="page-breadcrumb">
        <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sort-box">
                    <div class="sort-box-left">
                        <div class="sort-box-tab">
                            <ul class="sort-box-tab-list nav">
                               
                                <li><a class="sort-nav-link active" data-toggle="tab" href="#"><i
                                            class="fas fa-list"></i></a></li>
                            </ul>
                        </div> <span>Найдено 4 котика</span>
                    </div>
                    <div class="sort-box-right"> <span>Сортировать по:</span>
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
                <ul class="list-group shop-list">
                    <li class="list-group-item">
                        <div class="product-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="product-img-box">
                                        <a href="#"><img class="product-img" src="../img/product-home-1-img-1.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-md-5 position-relative">
                                    <div class="border-right"></div>
                                    <div class="product-price"><span
                                            class="product-price-reg">$10.71</span> </div> <a href="#"
                                        class="product-title">
                                        Apple watch
                                    </a>
                                    <div class="product-description">
                                        <p>Super Speed Dual Pixel Camera Infinity Display: edge to edge immersive
                                            screen, enhancing your entertainment experience* IP68 rating ...</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <ul class="shop-list-link">
                                        <li>
                                            <button class="btn btn-outline-primary">Add to cart</button>
                                        </li>
                                        <li><a href="#" class="wishlist-link"><i class="far fa-heart"></i>Add to
                                                wishlist</a></li>
                                        <li><a href="#" class="Quick-view"><i class="far fa-eye"></i>Quick view</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="product-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="product-img-box">
                                        <a href="#"><img class="product-img" src="../img/product-home-1-img-2.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-md-5 position-relative">
                                    <div class="border-right"></div>
                                    <div class="product-price"> <span class="product-price-del">$11.90</span> <span
                                            class="product-price-reg">$10.71</span> </div> <a href="#"
                                        class="product-title">
                                        Samsung Galaxy S9
                                    </a>
                                    <div class="product-description">
                                        <p>Super Speed Dual Pixel Camera Infinity Display: edge to edge immersive
                                            screen, enhancing your entertainment experience* IP68 rating ...</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <ul class="shop-list-link">
                                        <li>
                                            <button class="btn btn-outline-primary">Add to cart</button>
                                        </li>
                                        <li><a href="#" class="wishlist-link"><i class="far fa-heart"></i>Add to
                                                wishlist</a></li>
                                        <li><a href="#" class="Quick-view"><i class="far fa-eye"></i>Quick view</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="product-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="product-img-box">
                                        <a href="#"><img class="product-img" src="../img/product-home-1-img-3.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-md-5 position-relative">
                                    <div class="border-right"></div>
                                    <div class="product-price"> <span class="product-price-del">$11.90</span> <span
                                            class="product-price-reg">$10.71</span> </div> <a href="#"
                                        class="product-title">
                                        Samsung Galaxy S9
                                    </a>
                                    <div class="product-description">
                                        <p>Super Speed Dual Pixel Camera Infinity Display: edge to edge immersive
                                            screen, enhancing your entertainment experience* IP68 rating ...</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <ul class="shop-list-link">
                                        <li>
                                            <button class="btn btn-outline-primary">Add to cart</button>
                                        </li>
                                        <li><a href="#" class="wishlist-link"><i class="far fa-heart"></i>Add to
                                                wishlist</a></li>
                                        <li><a href="#" class="Quick-view"><i class="far fa-eye"></i>Quick view</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="product-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="product-img-box">
                                        <a href="#"><img class="product-img" src="../img/product-home-1-img-4.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-md-5 position-relative">
                                    <div class="border-right"></div>
                                    <div class="product-price"> <span class="product-price-del">$11.90</span> <span
                                            class="product-price-reg">$10.71</span> </div> <a href="#"
                                        class="product-title">
                                        Wed 9
                                    </a>
                                    <div class="product-description">
                                        <p>Super Speed Dual Pixel Camera Infinity Display: edge to edge immersive
                                            screen, enhancing your entertainment experience* IP68 rating ...</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <ul class="shop-list-link">
                                        <li>
                                            <button class="btn btn-outline-primary">Add to cart</button>
                                        </li>
                                        <li><a href="#" class="wishlist-link"><i class="far fa-heart"></i>Add to
                                                wishlist</a></li>
                                        <li><a href="#" class="Quick-view"><i class="far fa-eye"></i>Quick view</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="page-pagination"> <span>Showing 4 of 13 items</span>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <?
        require_once '../includes/footer.php';
    ?>
</body>

</html>