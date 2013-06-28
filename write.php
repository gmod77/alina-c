<?php

$myxmlname = $_POST["filename"];
$mycontent = stripslashes($_POST["mycontent"]);


if(!$myxmlname || !$mycontent){
	print "&returnMe=Server Error!";
	exit;
	} else {
	$file= fopen($myxmlname, "w");
	fwrite($file, "$mycontent");
	print "&returnMe=XML File Generated";
	}
	
?>