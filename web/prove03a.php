<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Brouse Items</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd		/popper.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 


		<link rel="stylesheet" type="text/css" href="prove03a.css" />

		<?php include 'itemlist.php';?>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="home.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="archive.php">Assignments</a>
				</li>
			</ul>
		</nav>
		<div id="container">
			<?php
				$index = 1;
				foreach($listings as $value) {
					if($index == 1) {
						echo "<div class=\"card-deck\">";
					}
					echo "<div class=\"card\">" .
						 	"<img class=\"card-img-top\" src=\"" . $value->getImage() . "\" alt=\"Image\"/>" .
						 	"<div class=\"card-body\">" .
						 		"<h4 class=\"card-title\">" . $value->getName() . "</h4>" .
						 		"<p class=\"card-text\">" . $value->getPrice() . "</p>" .
						 		"<a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>" .
						 	"</div>" .
						 "</div>";
					if($index == 3) {
						echo "</div><br>";
					}
				}
			?>
		</div>
	</body>
</html>
