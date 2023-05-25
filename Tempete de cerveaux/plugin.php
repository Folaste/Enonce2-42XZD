<?php
/*
Plugin Name: Tempete de cerveaux
Plugin URI:  tempetedecerveaux.local
Description: Plugin to add a chatbot in website
Version: 0.1
Author: Tempete de cerveaux
Author URI: tempetedecerveaux.local
*/


function chatbot_output()
{
	?>
	<!DOCTYPE html>
	<html>
		<p> "TEST" </p>
		<link rel="stylesheet" href="style.css">
		<div id="chatbot">
			<div><input id="input" type="text" placeholder="Type something !" autocomplete="off" autofocus="true"/> </div>
			<div><button type="submit">Envoyer</button></div>
		</div>
		<script>
			function sendMessage()
			{
				var input = document.getElementsByID("input");
				var message = input.value;

				input.value = "";
			}
		</script>
	</html>
	<?php
}


chatbot_output();
?>
