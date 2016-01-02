<?php

	require_once("resources/config.php");
	require_once("resources/library/db_functions.php");
	//echo $config['db']['dbname'];

    if(isset($_GET['nid'])) {
        $id = $_GET['nid'];
        echo $id;
    }
	
	$idioma = "ca";
	if(isset($_GET['idioma'])) {
        $idioma = $_GET['idioma'];
        echo $idioma;
    }
	echo "Noticies:<br>";
	$noticies = getNoticies($config['db'],$idioma);
	$counter = 0;
	while ($row = mysql_fetch_array($noticies)) {
		echo "noticias[".$counter."]= ".$row{'title'}.",".$row{'body'}."<br>";
		$counter = $counter+1;
	}
	
	echo "<br><br><hr><hr><hr><hr><hr>";
	$tipusServei = getTipusDeEspectacle($config['db'],$id, $idioma);
	echo "Tipus de espectacle: ".$tipusServei."<br><br>";

	$tipusPublic = getTipusDePublic($config['db'],$id,$idioma);
	echo "Tipus de public: ".$tipusPublic."<br><br>";	
	
	$duracio = getDuracio($config['db'],$id);
	echo "Duració: ".$duracio."<br><br>";	
	
	$nodeInfo = getNode($config['db'],$id);
	while ($row = mysql_fetch_array($nodeInfo)) {
		echo " Titol:".$row{'title'}."<br>";
		echo " Body:".$row{'body_value'}."<br>";
		echo " Fitxa tecnica:".$row{'field_fitxa_tecnica_value'}."<br>";
	}
	
	echo $config['paths']['images']['thumbnail'];
	$nodeImages = getNodeImagesFileNames($config['db'],$id);
	while ($row = mysql_fetch_array($nodeImages)) {
		$imageName = $row{'filename'};		
		echo "<br>ThumbNail image:<br>";
//		echo "<img src='http://localhost/drupal/sites/default/files/styles/thumbnail/public/".$imageName."'/>"."<br>";
		$thumbnailUrl = $config['paths']['images']['thumbnail'].$imageName;
		//echo $thumbnailUrl;
		echo "<img src='".$thumbnailUrl."'/><br>";	
	

		echo "<br>Real image:<br>";
		echo "<img src='http://localhost/drupal/sites/default/files/".$imageName."'/>"."<br>";
	}
	
	
	
	echo "<br><br><hr><hr><hr><hr><hr>";
	/*
	echo "Pasarela imgs:<br>";
	$pasarelaImg = getImatgesPasarela($config['db']);
	while ($row = mysql_fetch_array($pasarelaImg)) {
		$imageName = $row{'filename'};
		echo "filename:".$imageName."<br>";
		echo "<img src='http://localhost/drupal/sites/default/files/".$imageName."'/>"."<br>";
	}
	*/
	echo "<br><br><hr><hr><hr><hr><hr>";
	$categories = getTaxonomyData($config['db'],$config['taxonomyIndex']['serveis'], $idioma);
	while ($row = mysql_fetch_array($categories)) {
		echo "tid:".$row{'tid'}."  name:".$row{'name'}."<br>";
		$links = getTaxonomyNodeTitles($config['db'], $row{'tid'}, $idioma);
		while ($row2 = mysql_fetch_array($links)) {
			echo "<b>Servei: (".$row2['nid'].") ".$row2['title']."</b><br>";
		}
		/*
		$nodeTitles = getNodeTitlesByCategoria($config['db'], $row{'tid'});
		//while ($row2 = mysql_fetch_array($nodeTitles)) {
		//	echo "<b>Servei: (".$row2['nid'].") ".$row2['title'];
		//}
		foreach ($nodeTitles as &$title) {
			//echo "<b>Servei: (".$title['nid'].") ".$title['title'];
			echo "<b>Servei: ".$title;
		}
		*/
		
		echo "<hr><hr>";
	}
	
?>