<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Assignments</title>
		<link rel="stylesheet" type="text/css" href="archive.css"/>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

		<?php
			$items = array();
			$items['hello.html'] = "Prove01 - Hello World";
			$items['home.php'] = "Prove02 - Home Page";
		?>
	</head>
	<body>
		<div id="page">
			<div id="assignlist">
				<ul>
					<?php
						foreach ($items as $key => $value) {
							echo "<li><a href=\"" . $key . "\">" . $value . "</a></li>";
						}
					?>
				</ul>
			</div>
		</div>
	</body>
</html>
