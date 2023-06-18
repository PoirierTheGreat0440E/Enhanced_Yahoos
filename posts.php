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
					<p style="align-self:center;"> Send a new post ! </p>
					<p>Post's title :</p><alert style="color:black;font-size:13px;">ALERT</alert><br/>
					<input id="post_title" name="post_title" type="text" minlength="0" maxlength="60" placeholder="Put the title here..."/>
					<p>Post's content :</p><alert style="color:black;font-size:13px;">ALERT</alert><br/>
					<textarea id="post_content" name="post_content" placeholder="Put your message here..." cols="30" rows="40"></textarea>
					<br/>
					<input id="post_submit" name="post_submit" type="submit" value="Send a post" style="width:100%;font-size:30px;background-color:dodgerblue;color:white;";></form>
				</form>

			</aside>

			<!-- THE CONTENT ZONE -->
			<div id="Content_part">
				<p>Here's where anyone discusses about anything !</p>
				<button value="Desactiver formulaire" onclick="funky_web('https://e621.net/posts/4114168?q=sususuigi')">Hajsaopsa</button>
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

		// function designed to fill a messagebox with a specific message.
		// alert_box_number --> the indice of the <alert> section in the document.
		// message --> The message we want to display in the message box.
		// color --> The color of the inserted string ( has to be directly typed... )
		// font-size --> The size of the created text in the string.
		function alert_messagebox(alert_box_number,message,color,font_size){
			let alert_box = document.getElementsByTagName("alert")[alert_box_number];
			let new_text = document.createTextNode(message);
			alert_box.removeChild(alert_box.firstChild);
			alert_box.style.color = color;
			alert_box.style.fontSize = font_size;
			alert_box.appendChild(new_text);
		}

		// function that compute the number of remaining allowed characters in a selected
		// text input field. It takes the followings parameters...
		// text_input_id --> the id of the text input field.
		// alert_box_number --> the indice of the alert box in the document
		// ( where the number of remaining characters must be displayed )
		// maxlength --> The actual length limit of the text input field.
		// The function returns the computed difference between the maximum length
		// and the current length of the typed text.
		function text_input_length_indication(text_input_id,alert_box_number,maxlength){
			let selected_text_input = document.getElementById(text_input_id);
			let length_difference = maxlength - selected_text_input.value.length;
			if ( (selected_text_input.value.length >= 0) && (selected_text_input.value.length <= maxlength*0.6) ){
				alert_messagebox(alert_box_number,length_difference+" characters remaining.","green",30);
			} else if ( (selected_text_input.value.length >= 0.6) && (selected_text_input.value.length <= maxlength*0.8) ) {
				alert_messagebox(alert_box_number,length_difference+" characters remaining.","yellow",30);	
			} else if ( (selected_text_input.value.length >= 0.8) && (selected_text_input.value.length <= maxlength*0.9) ){
				alert_messagebox(alert_box_number,length_difference+" characters remaining.","orange",30);
			} else {
				alert_messagebox(alert_box_number,length_difference+" characters remaining.","red",30);
			}
			return length_difference;
		}

		function verify_post_form(){
			let submit_button = document.getElementById("post_submit"); 
			// If the maximum length of a text is exceeded in any of the two text input fields in the form, desactivate the submit button!
			// The same thing happens when nothing has been typed in either of the two input fields...
			if ( ( text_input_length_indication("post_title",0,60) < 0 ) || ( text_input_length_indication("post_content",1,1200) < 0 ) || ( text_input_length_indication("post_title",0,60) == 60 ) || ( text_input_length_indication("post_content",1,1200) == 1200 ) ){
				// The submit button is deactivated...
				submit_button.disabled = true;
				submit_button.style["background-color"]="red";
				submit_button.value = "Verify your post";
			} else {
				// The submit button is activated...
				submit_button.disabled = false;
				submit_button.style["background-color"]="dodgerblue";
				submit_button.value = "Send your post";
			}
		}

		function funky_web(url){
			//window.open(url,"Funky good times","width=500,height=500,resizable=no,scrollbars=0,status=0");
			window.print();
		}

		window.addEventListener('load',()=>{
			verify_post_form();
		});

		let title = document.getElementById("post_title");
		title.addEventListener("input",()=>{
			//alert_messagebox(0,"Aaah!","red",30);
			text_input_length_indication("post_title",0,60);
			verify_post_form();
		});

		let content = document.getElementById("post_content");
		content.addEventListener("input",()=>{
			//alert_messagebox(0,"Aaah!","red",30);
			text_input_length_indication("post_content",1,1200);
			verify_post_form();
		});
	</script>

</body>

</html>