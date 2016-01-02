<?php
	require_once("resources/config.php");
	require_once("resources/library/db_functions.php");
?>

<link rel="stylesheet" href="css/pasarela/notoyontiy.css" type="text/css">
<script src="js/pasarela/jquery-1.7.1.min.js"></script>
<script src="js/pasarela/jquery.infinitecarousel3.min.js"></script>
<script type="text/javascript" src="js/pasarela/easing.js"></script>
 
  <script>
     var a = jQuery.noConflict();
        a(document).ready(function() {
        a('#carousel').infiniteCarousel({
           imagePath: '',
           transitionSpeed:12000,
           displayTime: 0,
           thumbnailType: 'none',
           customClass: 'myCarousel',
           easeLeft: 'linear',
           easeRight:'linear',
           inView: 1,
           advance: 1,
           autoPilot: true,
           displayProgressRing: false,
           showControls: false,
           prevNextInternal: false
});
 });
</script>

<?php
	$pasarelaImg = getImatgesPasarela($config['db']);
	$auxPasarela = "";
	
	while ($row = mysql_fetch_array($pasarelaImg)) {		
		$auxPasarela = $auxPasarela."<li><img width='533' height='211' alt='' src='".$config['urls']['baseUrl']."/drupal/sites/default/files/".$row{'filename'}."'/></li>";
	}
?>
<ul id="carousel">
	<?php echo $auxPasarela; ?>
</ul>
<!-- 
<ul id="carousel">
  <li><img width="533" height="211" alt="" src="images/cabecera_home.jpg" /></li>
  <li><img width="200" height="100" alt="" src="images/cabecera_home.jpg" /></li>
  <li><img width="400" height="300" alt="" src="images/cabecera_home.jpg" /></li>
  <li><img width="400" height="300" alt="" src="images/cabecera_home.jpg" /></li>
</ul>
-->