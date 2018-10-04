<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Brouse Items</title>
		<link rel="stylesheet" type="text/css" href="prove03a.css" />

		<?php include 'itemlist.php';?>
	</head>
	<body>
		<div id="itemlistings">
			<?php
				foreach($listings as $value) {
					echo "<div class=\"listing\">" .
						 	"<img src=\"" . $value->getImage() . "\" />" .
						 	"<div class=\"iteminfo\">" .
						 		"<h1>" . $value->getName() . "</h1><br>" .
						 		"<h1 class=\"price\">" . $value->getPrice() . "</h1><br>" .
						 	"</div>" .
						 "</div><br>";
				}
			?>
		</div>
	</body>
</html>
