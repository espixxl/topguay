<html>
  <head>
    <title>Plantilla Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	
	<div id="contenedor" style="display: inline-block; width:250px; height:180px;">
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
        <div class="active item"><img  src="img0.jpg" alt="banner1" /></div>
        <div class="item"><img  src="img1.jpg" alt="banner2" /></div>
        <div class="item"><img  src="img2.jpg" alt="banner3" /></div>
        <div class="item"><img  src="img3.jpg" alt="banner4" /></div>
        <div class="item"><img  src="img4.jpg" alt="banner5" /></div>
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
  </body>
</html>