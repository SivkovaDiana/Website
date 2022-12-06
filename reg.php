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

  <!-- END HEADER -->
<!-- FORM -->
<div class="container reg_form">
  <form class="row justify-content-center" method="post" action="reg.html">
    <h2>Форма регистрации</h2>
    <div class="mb-3 col-12 col-md-4">
      <label for="formGroupExampleInput" class="form-label">Логин</label>
      <input type="text" class="form-control" id="formGroupExampleInput">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Мы не будем использовать Вашу почту для спама.</div>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
      <input type="password" class="form-control" id="exampleInputPassword2">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <button type="button" class="btn btn-secondary">Регистрация</button>
      <a href="log.html">Войти</a>
    </div>
    
  </form>
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