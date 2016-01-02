<?php
	require_once("resources/config.php");
	require_once("resources/library/db_functions.php");
?>
<!-- pasarela -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
	<div id="contenedor" style="display: inline-block; width:533px; height:211px;">
    <div id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">
	  
<?php
	$pasarelaImg = getImatgesPasarela($config['db']);
	$auxPasarela = "";
	$counter = 0;
	while ($row = mysql_fetch_array($pasarelaImg)) {		
		if ($counter === 0) {
			echo "<div class='active item'><img  src='".$config['urls']['baseUrl']."/drupal/sites/default/files/".$row{'filename'}."' alt='banner1' style='float:middle'/></div>";
		} else {
			echo "<div class='item'><img  src='".$config['urls']['baseUrl']."/drupal/sites/default/files/".$row{'filename'}."' alt='banner2' style='float:middle'/></div>";
		}
		$counter = $counter+1;
	}
?>	  
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
 

<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('.carousel').carousel()
    });
</script>


