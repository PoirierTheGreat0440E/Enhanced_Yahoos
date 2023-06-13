<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>| POST | Enhanced Yahoos </title>
	<meta name="description" content="Here's Anthony's personal webpage !"/>
	<meta name="author" content="Poirier Antoine"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="CSS/stylesheet1.css" rel="stylesheet" type="text/css">
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

				<!-- The post for new messages -->
				<form id="Post_form" action="posts.php" method="POST">

					<!-- Title with subtitle -->
					<p class="post_form_title">Have anything to say ?</p><i>Make a post !</i><br/><br/>

					<!-- The title of the message -->
					<label for="post_title">Title :</label><br/><div id="Title_length"><p>...</p></div>
					<input class="post_form_input" type="text" name="Title" id="post_title" placeholder="title..."  required/>
					<br/>

					<!-- The images/video/audio file of the message -->
					<label for="Post_image">Image/video/audio file (not mandatory) :</label>
					<input type="file" name="File" id="Post_image"/><br/>

					<!-- The actual message ( or post, it's the same stuff I guess ) -->
					<label for="post_content">Content of the post</label><br/><p class="alerting"></p><br/>
					<textarea class="post_form_input" name="Content" id="post_content" cols="35" rows="30" required> Type your message here... </textarea><br/>

					<!-- The button to submit the post -->
					<input type="submit" id="post_form_submit" value="Send a post"/>

				</form>

			</aside>

			<!-- THE CONTENT ZONE -->
			<div id="Content_part">
				<p>Here's where anyone discusses about anything !</p>
				<button value="Desactiver formulaire" onclick="document.getElementById('post_form_submit').disabled = true;">Hajsaopsa</button>
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

	<script>
		function process_title(message,max_length){
			let difference = max_length - message.length;
			let new_text = document.createTextNode(`${difference} characters allowed.`);
			document.getElementById("Title_length").removeChild(document.getElementById("Title_length").firstChild);
			document.getElementById("Title_length").appendChild(new_text);
		};
		let text = document.getElementById("post_title");
		text.addEventListener('change',()=>{process_title(text.value,100);});
		//let titre=document.getElementById("post_title");
		//titre.addEventListener("change",()=>{console.log(titre.value.length);});
	</script>

</body>

</html>