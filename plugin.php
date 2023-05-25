<?php
/*
Plugin Name: Tempete de cerveaux
Plugin URI:  tempetedecerveaux.local
Description: Plugin to add a chatbot in website
Version: 0.1
Author: Tempete de cerveaux
Author URI: tempetedecerveaux.local
*/

echo 'Hello, World!'.PHP_EOL;


function chatbot_output 
{
	?>
	<!DOCTYPE html>
	<html>
		<div id="chatbot">
			<div><input id="input" type="text" placeholder="Type something !" autocomplete="off" autofocus="true"/> </div>
		</div>
	</html>

	<?php
}

?>
