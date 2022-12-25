<?php include 'path.php';
	include 'app/database/db.php';
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

  <!-- блок карусели-->
  <div class="container">
  	<div class="row">
  		<h2 class="slider-title"> </h2>
  	</div>
  	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="assets/images/7.jpeg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="assets/images/6.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="assets/images/5.jpg" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
    </div>
  </div>
<!-- блок карусели-->


<!-- блок main-->
<div class="container">
	<div class="content row">
		<div class="main-content col-md-9 col-12">
			<h2>Последние публикации</h2>

			<div class="post row">
				<div class="img col-12 col-md-4">
					<img src="assets/images/3.png" alt="" class="img-thumbnail">
				</div>
				<div class="post_text col-12 col-md-8">
					<h3>
						<a href="#">Статья</a>
					</h3>
					<i class="far fa-user">Имя автора</i>
					<i class="far fa-calendar">Dec 3, 2022</i>
					<p class="preview-text">
						Lorem ipsum sit amet consectetur, adipisicing elit.
						Exercitationem optio possimus a inventore maxime laborum.
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
<!-- блок footer-->
<?php include("app/include/footer.php") ?>;
  </body>
</html>