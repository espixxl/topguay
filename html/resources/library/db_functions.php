<?php
	$tipus_de_espectacle_index = 3;
	
	
	function getDBConnection($dbParams) {
		//echo "getDBConnection - init()";
		//echo $dbParams['host'].",".$dbParams['username'].",".$dbParams['password'];
		$dbhandle = mysql_connect($dbParams['host'], $dbParams['username'], $dbParams['password'])
		or die("Unable to connect to MySQL");
		//echo "Connected to MySQL<br>";
		mysql_select_db($dbParams['dbname'], $dbhandle);		
		//echo "getDBConnection - end()";
		return $dbhandle;
	}

	function getNodeTitle($dbParams, $nid, $lang) {		
		//echo "getNode - init()";
		//echo $dbParams['host'];
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT no.title FROM node no where nid=".$nid." and no.language=".$lang."'");
		mysql_close($dbhandle);
		return $result;
	}
	
	function getNodeImagesFileNamesOld($dbParams, $nid) {
		$dbhandle = getDBConnection($dbParams);
		//$result = mysql_query("SELECT filename FROM file_managed fm, file_usage fu where fm.fid=fu.fid and fu.id=".$nid);		
		$result = mysql_query("SELECT fm.filename FROM file_managed fm, field_data_field_imatges fi where fi.field_imatges_fid=fm.fid and fi.entity_id=".$nid);		
		echo "<br>la select: SELECT fm.filename FROM file_managed fm, field_data_field_imatges fi where fi.field_imatges_fid=fm.fid and fi.entity_id=".$nid."<br>";
		mysql_close($dbhandle);
		return $result;
	}
	
	function getNodeImagesFileNames($dbParams, $nid) {
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT fm.uri as filename FROM file_managed fm, field_data_field_imatges fi where fi.field_imatges_fid=fm.fid and fi.entity_id=".$nid);		
		//echo "<br>la select: SELECT fm.uri as filename FROM file_managed fm, field_data_field_imatges fi where fi.field_imatges_fid=fm.fid and fi.entity_id=".$nid."<br>";
		mysql_close($dbhandle);
		return $result;
	}
	
	function getNode($dbParams, $nid) {	
		//echo "getNode - init()";
		//echo $dbParams['host'];
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT no.title, fdb.body_value FROM node no, field_data_body fdb where no.nid=".$nid." and fdb.entity_id=".$nid);		
		//$result = mysql_query("SELECT no.title, fdb.body_value, fdff.field_fitxa_tecnica_value FROM node no, field_data_body fdb, field_data_field_fitxa_tecnica fdff where no.nid=".$nid." and fdb.entity_id=".$nid." and fdff.entity_id=".$nid);				
		mysql_close($dbhandle);
		return $result;
	}
	
	function getFitxaTecnica($dbParams, $nid) {	
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT fdff.field_fitxa_tecnica_value FROM node no, field_data_body fdb, field_data_field_fitxa_tecnica fdff where no.nid=".$nid." and fdb.entity_id=".$nid." and fdff.entity_id=".$nid);		
		mysql_close($dbhandle);
		if (mysql_num_rows($result) > 0) return mysql_result($result,0);
		return;
	}
	
	function getVideoYoutube($dbParams, $nid) {	
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT fdb.field_video_youtube_value as video FROM node no, field_data_field_video_youtube fdb where no.nid=".$nid." and fdb.entity_id=".$nid);		
		mysql_close($dbhandle);
		if (mysql_num_rows($result) > 0) {
			return formatVideoYoutubeUrl(mysql_result($result,0));
		}
		return;
	}
	
	function formatVideoYoutubeUrl($url) {
		//standard video url --> http://www.youtube.com/watch?v=l_MVM7WMkRo
		//iframe src url --> //www.youtube.com/embed/l_MVM7WMkRo
		$formattedUrl = explode("?v=",$url);
		return $formattedUrl[1];
	}
	
	function getNodeTitlesByCategoria($dbParams, $tid) {
		$dbhandle = getDBConnection($dbParams);
		$nodesIds = mysql_query("SELECT fd.entity_id FROM field_data_field_tipus_de_servei fd, field_revision_field_ordre for where fd.field_tipus_de_servei_tid=".$tid);
		$nodeTitles = array();
		$counter = 0;
		
		while ($row = mysql_fetch_array($nodesIds)) {
			$nid = $row{'entity_id'};
			//echo "select:"."SELECT title, nid FROM node where nid=".$nid."<br>";
			$node = mysql_query("SELECT title, nid FROM node where nid=".$nid);
			while ($row2 = mysql_fetch_array($node)) {
				//echo "title:".$row2{'title'}."  nid:".$row2{'nid'}."<br>";
				//$nodeTitles[$counter] = $row2;
				$nodeTitles[$nid] = $row2{'title'};
				$counter = $counter+1;
			}		
		}
		//$result = mysql_query("SELECT no.title FROM node no where nid=".$nid);
		mysql_close($dbhandle);
		return $counter;
	}
	
	//TAXONOMY tipus de servei
	//valores nodo taxonomia (select)
	//tabla taxonomy_term_data, 
	function getTaxonomyData($dbParams, $vid, $lang) {
		if ($lang==="ca") {
			return getTaxonomyDataCatala($dbParams, $vid);
		} else {
			return getTaxonomyDataCastella($dbParams, $vid);
		}
	}
	
	function getTaxonomyDataCatala($dbParams, $vid) {
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT tid, name FROM taxonomy_term_data where vid=".$vid." order by weight");
		mysql_close($dbhandle);
		return $result;
	}
	
	function getTaxonomyDataCastella($dbParams, $vid) {
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT ttd.tid, fdt.field_traduccio_tipus_servei_value as name FROM taxonomy_term_data ttd, field_data_field_traduccio_tipus_servei fdt where fdt.entity_id=ttd.tid and ttd.vid=".$vid." order by weight");
		mysql_close($dbhandle);
		return $result;
	}
	
	//Used in main index, returns all node titles classfied by field: field_data_field_tipus_de_servei
	//TAXONOMY tipus de servei
	function getTaxonomyNodeTitles($dbParams, $tid, $lang) {
		if ($lang==="ca") {
			return getTaxonomyNodeTitlesCatala($dbParams, $tid);
		} else {
			return getTaxonomyNodeTitlesCastella($dbParams, $tid);
		}
	}
	
	function getTaxonomyNodeTitlesCatala($dbParams, $tid) {
		$dbhandle = getDBConnection($dbParams);
		//echo "<br>Select: SELECT no.title, no.nid FROM node no, field_data_field_tipus_de_servei fd where no.nid=fd.entity_id and fd.field_tipus_de_servei_tid=".$tid."<br>";
		$result = mysql_query("SELECT no.title, no.nid FROM node no, field_data_field_tipus_de_servei fd, field_revision_field_ordre ford where no.nid=fd.entity_id and fd.field_tipus_de_servei_tid=".$tid." and no.language='ca' and no.nid=ford.entity_id order by ford.field_ordre_value asc");
		mysql_close($dbhandle);
		return $result;
	}
	
	function getTaxonomyNodeTitlesCastella($dbParams, $tid) {
		$dbhandle = getDBConnection($dbParams);
		//echo "<br>Select: SELECT fds.field_traduccio_tipus_servei_value as title, no.nid FROM node no, field_data_field_tipus_de_servei fd, field_data_field_traduccio_tipus_servei fds where no.nid=fd.entity_id and fd.field_tipus_de_servei_tid=".$tid." and fds.entity_id=fd.field_tipus_de_servei_tid"."<br>";
		$result = mysql_query("SELECT no.title, no.nid FROM node no, field_data_field_tipus_de_servei fd, field_revision_field_ordre ford where no.nid=fd.entity_id and fd.field_tipus_de_servei_tid=".$tid." and no.language='es' and no.nid=ford.entity_id order by ford.field_ordre_value asc");
		
		//$result = mysql_query("SELECT no.title, no.nid FROM node no, field_data_field_tipus_de_servei fd, field_data_field_traduccio_tipus_servei fds where no.nid=fd.entity_id and fd.field_tipus_de_servei_tid=".$tid." and fds.entity_id=fd.field_tipus_de_servei_tid and no.language='es'");

		mysql_close($dbhandle);
		return $result;
	}
	
	//TAXONOMY tipus de espectacle
	function getTipusDeEspectacle($dbParams, $nid, $lang) {
	
		if ($lang==="ca") {
			return getTipusDeEspectacleCatala($dbParams, $nid);
		} else {
			return getTipusDeEspectacleCastella($dbParams, $nid);
		}
	}

	function getTipusDeEspectacleCatala($dbParams, $nid) {
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT td.name FROM taxonomy_term_data td, field_data_field_tipus_espectacle fd where fd.field_tipus_espectacle_tid=td.tid and fd.entity_id=".$nid);
		mysql_close($dbhandle);
		if (mysql_num_rows($result) > 0) return mysql_result($result,0);
		return;
	}
	
	function getTipusDeEspectacleCastella($dbParams, $nid) {
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT fdt.field_traduccio_tipus_espectacle_value FROM taxonomy_term_data td, field_data_field_tipus_espectacle fd, field_data_field_traduccio_tipus_espectacle fdt where fd.field_tipus_espectacle_tid=td.tid and fd.entity_id=".$nid." and fdt.entity_id=fd.field_tipus_espectacle_tid");
		mysql_close($dbhandle);
		if (mysql_num_rows($result) > 0) return mysql_result($result,0);
		return;
	}
	
	//TAXONOMY tipus de public
	function getTipusDePublic($dbParams, $nid, $lang) {
		if ($lang==="ca") {
			return getTipusDePublicCatala($dbParams, $nid);
		} else {
			return getTipusDePublicCastella($dbParams, $nid);
		}
	}
	
	function getTipusDePublicCatala($dbParams, $nid) {
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT td.name FROM taxonomy_term_data td, field_data_field_tipus_public fd where fd.field_tipus_public_tid=td.tid and fd.entity_id=".$nid);
		mysql_close($dbhandle);
		
		if (mysql_num_rows($result) > 0) return mysql_result($result,0);
		return;
	}
	
	function getTipusDePublicCastella($dbParams, $nid) {
		$dbhandle = getDBConnection($dbParams);
		$result = mysql_query("SELECT fdt.field_traduccio_tipus_public_value FROM taxonomy_term_data td, field_data_field_tipus_public fd, field_data_field_traduccio_tipus_public fdt where fd.field_tipus_public_tid=td.tid and fd.entity_id=".$nid." and fdt.entity_id=fd.field_tipus_public_tid");
		mysql_close($dbhandle);
		if (mysql_num_rows($result) > 0) return mysql_result($result,0);
		return;
	}
	
	
	//Duració no té traducció
	function getDuracio($dbParams, $nid) {
		$dbhandle = getDBConnection($dbParams);
		//$result = mysql_query("SELECT no.title, fdb.body_value, fdff.field_fitxa_tecnica_value, fdur.field_duracio_value as duracio FROM node no, field_data_body fdb, field_data_field_fitxa_tecnica fdff, field_data_field_duracio fdur where no.nid=".$nid." and fdb.entity_id=".$nid." and fdff.entity_id=".$nid." and fdur.entity_id=".$nid);
		$result = mysql_query("SELECT fdur.field_duracio_value as duracio FROM field_data_field_duracio fdur where fdur.entity_id=".$nid);
		mysql_close($dbhandle);
		if (mysql_num_rows($result) > 0) return mysql_result($result,0);
		return;
	}
	
	function getImatgesPasarela($dbParams) {
		$node_pasarela = 15;
		$dbhandle = getDBConnection($dbParams);
//		$result = mysql_query("SELECT filename FROM file_managed fm, file_usage fu where fm.fid=fu.fid and fu.id=".$node_pasarela);		
		$result = mysql_query("SELECT filename FROM file_managed fm, file_usage fu, field_data_field_pasrela_imatges fdfpi where fm.fid=fu.fid and fu.id=".$node_pasarela." and fdfpi.field_pasrela_imatges_fid=fm.fid order by fdfpi.delta asc");		
		
		mysql_close($dbhandle);
		return $result;
	}
	
	function getNoticies($dbParams, $lang) {
		$dbhandle = getDBConnection($dbParams);
		if (IsNullOrEmptyString($lang)) {
			$result = mysql_query("SELECT no.title, fdb.body_value as body FROM node no, field_data_body fdb where no.type='noticia' and fdb.entity_id=no.nid order by no.created desc");		
		} else {
			$result = mysql_query("SELECT no.title, fdb.body_value as body FROM node no, field_data_body fdb where no.type='noticia' and fdb.entity_id=no.nid and no.language='".$lang."' order by no.created desc");		
			
		}
		mysql_close($dbhandle);
		return $result;
	}
	
	function IsNullOrEmptyString($question){
		return (!isset($question) || trim($question)==='');
	}
	

	function getOldURL(){
		$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
		return $url;
	}
	
	function getURL(){
		$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return $url;
	}