<?php
	
	$message = $_POST["txt_message"];
	
	if($message==""){
		echo "Please type your message. *FOR DEMO*";
		exit();
	}

	echo "1"; // form ok
?>