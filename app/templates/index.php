<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles/css/style.css">
	<link rel="stylesheet" type="text/css" href="styles/css/main.css">
	<title>Анти-солнце</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="navbar navbar-light bg-faded container border-1px-black down-0-5"> <!-- border-1px-black mar-0-5 вся страница -->
		<header class="container ">
			<h1 class="center mar-0-5">Анти-солнце</h1>
		</header>
		<nav class="navbar navbar-light bg-faded container">
		  	<form method="POST" action="form.php" class="well form-search form-inline search-online">
		  		<div class="center">
				    <input type="text" name="search" id="search" class="form-control span3 search-query" placeholder="Поиск...">
				   	<input type="submit" name="" class="btn btn-primary search-btn" value="Поиск">
				</div>   
			</form>
		</nav>
		<hr />
		<article>
			<h2 class="center">Новости</h2>
			<br/>
			<div class="center">
				<?php 
					$link = mysqli_connect("localhost", "root", "1111", "blog");
					mysqli_query($link, "SET NAMES utf8");
					$q = mysqli_query($link, "SELECT * FROM `posts`");
					while($row = mysqli_fetch_assoc($q)){
						echo "<h4>". $row['title'] . "</h4><br/>";
						echo "<h6>". $row['body'] . "</h6><br/>";
						echo "<br/>";
					}
					mysqli_close($link);


				?>
			</div>
		</article>
	</div>

	<script type="text/javascript" src="styles/js/jquery.js" ></script>
	<script type="text/javascript" src="styles/js/main.js" ></script>
	<script type="text/javascript" src="styles/bootstrap/js/bootstrap.js" ></script>
</body>
</html>
