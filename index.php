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
  <header class="container-fluid">
  	<div class="container"> 
  		<div class="row">
  			<div class="col-4">
  				<h1>
  					<a href="/">Flower Fairy</a>
  				</h1>
  			</div>
  			<nav class="col-8">
  				<ul>
  					<li><a href="#">Главная</a> </li>
  					<li><a href="#">Энциклопедия</a> </li>

  					<li>
  						<a href="#">Кабинет</a>
  						<ul>
  							<li><a href="#">Админ панель</a> </li>
  							<li><a href="#">Выход</a> </li>
  						</ul> 
  					</li>
  				</ul>
  			</nav>
  		</div>
  	</div>
  </header>

  <!-- блок карусели-->
  <div class="container">
  	<div class="row">
  		<h2 class="slider-title">Лучшие публикации</h2>
  	</div>
  	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
	    	<div class="carousel-item active">
	      		<img src="assets/images/1.png" class="d-block w-100" alt="...">
	      		<div class="carousel-caption-hack carousel-caption d-none d-md-block">
	        		<h5><a href="">First slide label</a></h5>
	      		</div>
	   		</div>
	    	<div class="carousel-item active">
	      		<img src="assets/images/2.png" class="d-block w-100" alt="...">
	      		<div class="carousel-caption-hack carousel-caption d-none d-md-block">
	        		<h5><a href="">First slide label</a></h5>
	      		</div>
	    	</div>
	    	<div class="carousel-item active">
	      		<img src="assets/images/3.png" class="d-block w-100" alt="...">
	      		<div class="carousel-caption-hack carousel-caption d-none d-md-block">
	        		<h5><a href="">First slide label</a></h5>
	      		</div>
	    	</div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="visually-hidden">Previous</span>
  	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="visually-hidden">Next</span>
      </button>
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
<div class="footer container-fluid">
	<div class="footer-content container">
		<div class="row">
			<div class="footer-section about col-md col-12">
				<h3 class="logo-text">Flower Fairy</h3>
				<p>
					Flower Fairy - это блог для ценителей цветов и их эстетики.
				</p>
				<div class="contact">
					<span><i class="fas fa-phone"></i> &nbsp; 8(982)731-28-11</span>
					<span><i class="fas fa-envelope"></i> &nbsp; diana.sivkova18av@gmail.com</span>
				</div>
			</div>
			<div class="footer-section contact-form col-md-4 col-12">
				<h3>Контакты</h3>
				<br>
					<form action="index.html" method="post">
						<input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
						<textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."> </textarea>
						<button type="submit" class="btn btn-big contact-btn">
							<i class="fas fa-envelope"></i>
							Отправить
						</button>
					</form>
			</div>
		</div>
		<div class="footer-bottom">
			&copy; Designed by Sivkova
		</div>
	</div>
</div>

  </body>
</html>