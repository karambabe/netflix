<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
</head>
<body>

 <!--шапка-->
 <div class="bg-dark p-3 col-12">
        <div class="row">
            <div class="col-1">
                <img src="logo.png" alt="" class="w-100">
            </div>
            <div class="col-7 pt-2">
                <a href="" class="text-light ml-3 text-decoration-none">Главная</a>
                <a href="" class="text-light ms-3 text-decoration-none">Сериалы</a>
                <a href="" class="text-light ms-3 text-decoration-none">Фильмы</a>
                <a href="" class="text-light ms-3 text-decoration-none">Новые и популярные</a>
                <a href="" class="text-light ms-3 text-decoration-none">Мой список</a>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
    <div>
        <?
            $movie = [
                "name"=>"DOWNTOWN ABBEY",
                "inf"=>"Этот сериал, обнажающий снобизм и интриганство внутри исчезающей классовой системы Англии, рассказывает о событиях жизни семьи Кроули и её слуг.",
                "year"=>2015,
                "img"=>"downtownabbey.webp"
            ];
        ?>
        <div style="background-image: url(<? echo $movie['img'] ?>); background-size: 100% 100%; height: 900px">
            <h1 style="padding-top: 100px; color: white; font-size: 70px; width: 400px">
                <?
                    echo $movie['name'];
                ?>
            </h1>
            <p style="color: white; width: 400px">
                <?
                    echo $movie['inf'];
                ?>
            </p>
                <button style="background: white; color: black; height: 50px; width: 100px; border-radius: 10px">Смотреть</button>
                <button style="background: grey; color: white; height: 50px; width: 100px; border-radius: 10px">Подробнее</button>
        </div>
    </div>
    </body>
</html>