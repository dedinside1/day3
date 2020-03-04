
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Practice</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  				<a class="navbar-brand" href="/main">ПРАКТИКА</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
 				 </button>
  				<div class="collapse navbar-collapse" id="navbarNav">
   					 <ul class="navbar-nav">
     					 <li class="nav-item">
        					<a class="nav-link" href="/main">Главная</a>
     					 </li>
     					 <li class="nav-item">
        					<a class="nav-link" href="/services">Услуги</a>
     					 </li>
      					<li class="nav-item">
       				 		<a class="nav-link" href="/portfolio">Портфолио</a>
      					</li>
     					 <li class="nav-item">
        					<a class="nav-link" href="/contacts">Контакты</a>
     					 </li>
   					 </ul>
						 <?php if($_SESSION['login'] == ''):
						 echo "<a href='login.php' class='btn btn-lg btn-primary'> Вход </a> ";
						   ?>
						 <?php else: echo "Вы авторизированны, " . $_SESSION['login']; ?>
						 <?php endif;?>
  				</div>
			</nav>
				<div>
					<div class="container">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div class="footer">
				<hr>
				<div class="col-12">
					<h3>О Нас</h3>
					<p>Занимаемся кодированием уже с 2018 !!!</p>
				</div>
				<br>
			</div>
	</body>
</html>
