<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title> Enhanced Yahoos </title>
	<meta name="description" content="Here's Anthony's personal webpage !"/>
	<meta name="author" content="Poirier Antoine"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="CSS/stylesheet1.css" rel="stylesheet" type="text/css">
	<script>
		
		document.addEventListener("click", e => {console.log(e.pageX);console.log(e.pageY);} );

	</script>
</head>
<body>

	<main>

		<!-- The nav of the website -->
		<nav id="Nav_part">
			<!-- This is where the logo should be placed... -->
			<div id="Logo_part">
				
			</div>
			<div id="Nav_table">
				<a href="posts.php"><div><p>Posts</p></div></a>
				<a href="#"><div><p>Images</p></div></a>
				<a href="#"><div><p>Videos</p></div></a>
				<a href="#"><div><p>About us</p></div></a>
			</div>
		</nav>

		<div id="Main_part">

			<!-- LEFT SIDE BAR -->
			<aside id="Left_side_bar">
				<p>This the left side bar...</p>
			</aside>

			<!-- THE CONTENT ZONE -->
			<div id="Content_part">
				<p>Here's where the content should be put...</p><br/><p>Here's where the content should be put...</p><br/><p>Here's where the content should be put...</p>
				<br/>
				<button onclick="alert('Stop that');" value="Thrust!">WAIL VIGOROUSLY</button>
			</div>

			<!-- RIGHT SIDE BAR -->
			<aside id="Right_side_bar">
				<p>This is the right side bar...</p>
			</aside>

		</div>

		<!-- The footer of the website -->
		<footer id="Footer_part">
			<p>This is a footer</p>
		</footer>

	</main>

</body>

</html>