<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="<?echo file_get_contents("files/KeyWords.txt")?>">
    <meta name="description" content="<?echo file_get_contents("files/DescriptionSite.txt")?>">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link href="css/index.css" rel="stylesheet">
    <title>&#128575;Oh no..&#128575;</title>
</head>

<body>

    <div class="container d-flex error">
        <div class="row">
            <div class="col-12">
                <h1>404</h1>
                <p>Страница не найдена :(</p>
                <img src="errors/404.jpg" alt="">
                <div class="mt-4">
                    <a href="index.php"><button class="btn btn-primary">Вернуться на главную</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>