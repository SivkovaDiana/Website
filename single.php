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

<!-- блок main-->
<div class="container">
	<div class="content row">
		<div class="main-content col-md-9 col-12">
			<h2>Простые в уходе многолетники</h2>

			<div class="single_post row">
				<div class="img col-12">
					<img src="assets/images/4.jpg" alt="" class="img-thumbnail">
				</div>
				<div class="single_post_text col-12">
					<p>Неприхотливые многолетники завоевали популярность у дачников благодаря обильному цветению, способности размножаться самостоятельно, большому выбору и морозостойкости. Самыми популярными из них являются:</p>
					<p>*пион – нетребовательный к почве многолетник. Разнообразие расцветок позволяет составить из пионов прекрасную композицию. Клумба будет украшать сад, не требуя при этом тщательного ухода;</p>
					<p>*тюльпаны можно выращивать на любых видах почвы. Букет из сухоцветов купить можно по низкой цене и получить множество преимуществ, например, они хорошо переносят морозы и практически не подвержены заболеваниям. Уже в начале апреля на клумбе распустятся нежные сухоцветы Москва, поражающие разнообразием форм и насыщенностью оттенков;</p>
					<p>*дицентра имеет необычной формы сухоцветы фото, по форме напоминающие маленькие сердечки. С мая по июнь многолетник усеян нежными цветами, которыми хочется любоваться бесконечно. Дицентра не нуждается в регулярном удобрении и не требовательна к поливу;</p>
					<p>*крокусы зацветают в начале марта, и до середины мая радуют глаз нежными цветами. Данный многолетник любит солнечные места, но может расти и на затененных участках сада;</p>
					<p>*барвинок часто используют вместо газонной травы. Яркие зеленые листья ковром покрывают землю, не оставляя шанса сорнякам. С марта по конец мая барвинок усеян нежными цветами, что позволяет высаживать растение в качестве дополнения к высокорослым садовым цветам.</p>
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

			<div class="section topics">
				<h3>Категории</h3>
				<ul>
					<li><a href="#">Уход за цветами</a></li>
					<li><a href="#">Интересные растения</a></li>
					<li><a href="#">...</a></li>
					<li><a href="#">...</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- блок footer-->
<?php include("app/include/footer.php") ?>;

  </body>
</html>