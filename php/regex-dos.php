<?php
	$input = $_GET['value'];
	$pattern = $_GET['pattern'];

	echo preg_replace($pattern, 'st', $input);
?>