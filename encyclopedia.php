<?php 
  include "path.php";
  include "app/controllers/users.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Flower Fairy</title>
  </head>

  
  <body>
    <?php include("app/include/header.php"); ?>

    <div class="container">
    <div class="content row">
        <div class="main-content col-md-9 col-12">
            <h2>Энциклопедия</h2>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/9.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3><a>Астра</a> </h3>
                    <p class="preview-text">
                        Астра (Aster) – травянистое растение, принадлежащее к роду Астровых. Благодаря красоте своих цветков, похожих на яркие звезды, широко применяется в ландшафтном дизайне, украшении приусадебных территорий.
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/10.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3><a>Гвоздика</a> </h3>
                    <p class="preview-text">
                        Гвоздика - цветок неоднозначный. Обесцененная в советском прошлом, она с опаской воспринимается многими клиентами, но горячо любима современными флористами.
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/11.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3><a>Пион</a> </h3>
                    <p class="preview-text">
                        Пио́н — род травянистых многолетников и листопадных кустарников. Единственный род семейства Пионовые, ранее род относили к семейству лютиковых. Пионы цветут в конце весны, ценятся садоводами за пышную листву, эффектные цветы и декоративные плоды.
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/13.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3><a>Роза</a> </h3>
                    <p class="preview-text">
                        Ро́за — собирательное название видов и сортов представителей рода Шипо́вник, выращиваемых человеком и растущих в дикой природе. Бо́льшая часть сортов роз получена в результате длительной селекции путём многократных повторных скрещиваний и отбора.
                    </p>
                </div>
            </div>

        </div> 
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Поиск</h3>
                <form action="index.html" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово ...">
                </form>
            </div>

            
        </div>
    </div>
</div>
<?php include("app/include/footer.php") ?>;
  </body>
</html>