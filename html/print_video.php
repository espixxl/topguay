<?php 
	require_once("resources/config.php");
	require_once("resources/library/db_functions.php");
	$url = getVideoYoutube($config['db'],$id);
	if (!empty($url)) {
		echo "<iframe width='420' height='315' src='//www.youtube.com/embed/".$url."' frameborder='0' allowfullscreen></iframe>";
	}
?>