<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0be61fa4f3.js" crossorigin="anonymous"></script>
    <link href="../css/contact.css" rel="stylesheet">
    <title>CSHOP</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link" aria-current="page" href="../index.html">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../pages/shop.html">Shop</a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="../pages/contact.html">Contact us</a> </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="page-breadcrumb">
        <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="contact-info-wrap">
                        <div class="single-contact-info">
                            <div class="contact-icon"> <i class="fas fa-phone-alt"></i> </div>
                            <div class="contact-info-dec"> <a href="tel://+012-345-678-102">+000 123 345 678</a> <a href="tel://+012-345-678-102">+000 123 345 678</a> </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-icon"> <i class="fas fa-globe-asia"></i> </div>
                            <div class="contact-info-dec"> <a href="mailto://urname@email.com">email@mail.com</a> <a href="mailto://urwebsitenaem.com">CompanySite.com</a> </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-icon"> <i class="fas fa-map-marker-alt"></i> </div>
                            <div class="contact-info-dec"> <span>Address</span> <span>street 3, Crossroad 123.</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form">
                        <div class="section-content">
                            <h5 class="section-content-title">Get In Touch</h5> </div>
                        <form>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2"> </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Subject" aria-label="Subject" aria-describedby="basic-addon1"> </div>
                            <div class="input-group">
                                <textarea rows="5" placeholder="Your message" class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <button style="margin-top:30px;" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer font-small bg-primary">
        <div class="footer-copyright text-white text-center py-3">©NoHaunt </div>
    </footer>
</body>

</html>
