<?php
$username = "qrd866";
$password = "PauRoman08";
$hostname = "qrd866.topguay.com";
$databasename = "qrd866";
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

mysql_select_db($databasename, $dbhandle);

$result = mysql_query("SELECT * FROM node");
//print_r($result);
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
  echo "ID:".$row{'nid'}." Name:".$row{'title'}."<br>";
}
/*
$result = mysql_query("SELECT * FROM field_data_body");
//print_r($result);
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
  echo "ENTITY_ID:".$row{'entity_id'}." REVISION_ID:".$row{'revision_id'}." BODY_VALUE:".$row{'body_value'}."<br>";
}

echo "<br/><br/>";
//$result = mysql_query("SELECT * FROM taxonomy_term_data where vid=4");
$result = mysql_query("SELECT * FROM taxonomy_term_data");
//print_r($result);
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
  echo "TID:".$row{'tid'}." VID:".$row{'vid'}." Name:".$row{'name'}."<br>";
}
*/
/*
echo "<br/><br/>";
$result = mysql_query("SELECT filename FROM file_managed fm, file_usage fu where fm.fid=fu.fid");
//print_r($result);
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
  $imageName = $row{'filename'};
  //echo "filename:".$row{'filename'}."<br>";
  echo "<br>ThumbNail image:<br>";
  echo "<img src='http://localhost/drupal/sites/default/files/styles/thumbnail/public/field/image/".$imageName."'/>";

  echo "<br>Medium image:<br>";
  echo "<img src='http://localhost/drupal/sites/default/files/styles/medium/public/field/image/".$imageName."'/>";

  echo "<br>Big image:<br>";
  echo "<img src='http://localhost/drupal/sites/default/files/styles/large/public/field/image/".$imageName."'/>";
}*/

/*
echo "<br/><br/>";
//fu.id = nid del nodo
$result = mysql_query("SELECT filename FROM file_managed fm, file_usage fu where fm.fid=fu.fid and fu.id=2");
//print_r($result);
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
  $imageName = $row{'filename'};
  //echo "filename:".$row{'filename'}."<br>";
  echo "<br>ThumbNail image:<br>";
  echo "<img src='http://localhost/drupal/sites/default/files/styles/thumbnail/public/".$imageName."'/>";

  echo "<br>Real image:<br>";
  echo "<img src='http://localhost/drupal/sites/default/files/".$imageName."'/>";
}
*/

?>