<?php


$config = array(
"db" => array(
"dbname" => "qrd866",
"username" => "qrd866",
"password" => "PauRoman08",
"host" => "qrd866.topguay.com"
),

"urls" => array(
"baseUrl" => "http://www.topguay.com"
),

"taxonomyIndex" => array(
"serveis" => "2",
"tipusEspectacle" => "3",
"tipusPublic" => "4"
),

"paths" => array(
"resources" => "/path/to/resources",
"images" => array(
"thumbnail" => "http://www.topguay.com/drupal/sites/default/files/styles/thumbnail/public/",
"real" => "http://www.topguay.com/drupal/sites/default/files/"

//"thumbnail" => $_SERVER["DOCUMENT_ROOT"]."/drupal/sites/default/files/styles/thumbnail/public/",
//"real" => $_SERVER["DOCUMENT_ROOT"] . "/drupal/sites/default/files/"
)
)
);

/*
I will usually place the following in a bootstrap file or some type of environment
setup file (code that is run at the start of every page request), but they work
just as well in your config file if it�s in php (some alternatives to php are xml or ini files).
*/
/*
Creating constants for heavily used paths makes things a lot easier.
ex. require_once(LIBRARY_PATH . �Paginator.php�)
*/
defined("LIBRARY_PATH")
or define("LIBRARY_PATH", realpath(dirname(__FILE__).'/library'));
defined("TEMPLATES_PATH")
or define("TEMPLATES_PATH", realpath(dirname(__FILE__).'/templates'));
/*
Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
?>