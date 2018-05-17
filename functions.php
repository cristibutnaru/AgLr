<?php

function preventInjection($conn,$var){
	$var = strip_tags($var);
	$var = stripslashes($var);
	$var = mysqli_real_escape_string($conn,$var);
	$var = trim($var);
	return $var;
}

?>