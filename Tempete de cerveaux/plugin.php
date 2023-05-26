<?php
/*
Plugin Name: Tempete de cerveaux
Plugin URI:  tempetedecerveaux.local
Description: Plugin to add a chatbot in website
Version: 0.1
Author: Tempete de cerveaux
Author URI: tempetedecerveaux.local
*/

//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

function chatbot_output() {
	?>
	<!DOCTYPE html>
	<html>
		<p> "TEST" </p>
		<link rel="stylesheet" href="style.css">
		<div id="chatbot">
			<div><input id="input" type="text" placeholder="Type something !" autocomplete="off" autofocus="true"/> </div>
			<div><button type="submit" onclick="sendMessage()">Envoyer</button></div>
		</div>
		<script>
			function sendMessage() {
				const inputField = document.getElementById("input");
				let input = inputField.value;
				inputField.value = "";
				output(input);
			}

			function output(input) {
				// Logique de traitement du message utilisateur et affichage de la réponse du chatbot
			}

			// Écouteur d'événement pour la touche "Enter"
			const inputField = document.getElementById("input");
			inputField.addEventListener("keydown", function(e) {
				if (e.code === "Enter") {
					sendMessage();
				}
			});
		</script>
	</html>
	<?php
}

chatbot_output();
?>
