<?php require_once ("connect.php");?>
<!Doctype html>
<html>
	<head>
		<title>ԲԼՈԳ</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"></link>
	</head>
	<body>
		<header>
			<img src="img/logo.jpg" />
		</header>
		<section>
			<aside>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Home</a></li>
					<li><a href="">Home</a></li>
					<li><a href="">Home</a></li>
				</ul>
			</aside>
					<?php
						$res = $mysqli->query("SELECT * FROM posts");
						if ($res->num_rows>0) {
							while ($row = $res->fetch_assoc()){
								echo '<article>
											<h3>' . $row['title'] . '</h3>
											<img src="img/articleImg.jpg" />
											<p>' . $row['m_desc'] . '<a href="view.php?id=' . $row['id'] . '">more...</a></p>
										</article>';
							};
						}
					?>
		</section>
		<footer>
			Narek Sargsyan`s blog (c) 2016
		</footer>
	</body>
</html>
