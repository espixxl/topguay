<?php
	require_once("resources/config.php");
	require_once("resources/library/db_functions.php");
	echo "<table width='100%' cellpadding='0' cellspacing='0'>";
	$categories = getTaxonomyData($config['db'],$config['taxonomyIndex']['serveis'],$idioma);
	$counter = 1;
	while ($row = mysql_fetch_array($categories)) {
		//echo "tid:".$row{'tid'}."  name:".$row{'name'}."<br>";
		
		echo "<tr><td class='opcion' id='opcion".$counter."' height='32'><a id='opcion".$counter."' href='javascript:mostra(document.getElementById(\"ei".$counter."\"));return false;' onMouseOver=''>".$row{'name'}."</a></td></tr>";
		echo "<tr id='ei".$counter."' class='opcion".$counter."' style='display:none;'><td><table width='234' cellpadding='0' cellspacing='0'>";
		
		$links = getTaxonomyNodeTitles($config['db'], $row{'tid'},$idioma);
		while ($row2 = mysql_fetch_array($links)) {
			echo "<tr><td height='1' class='separador'><img src='images/spacer.gif' width='1' height='1'/></td></tr>";
			echo "<tr><td class='subopcion' height='32'><a href='index.php?nid=".$row2['nid']."&idioma=".$idioma."'>".$row2['title']."</a></td></tr>";
			}
		
		echo "</table></td></tr>";
		$counter = $counter+1;
	}
	
	echo "</table>";
 ?>
                                                                      