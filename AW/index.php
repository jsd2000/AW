<html>
	<head>
		<meta charset="UTF-8">

		<title>Base de dades Futbol</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--<link href="css/carousel.css" rel="stylesheet">-->

		<!-- Custom styles for this template -->
		<link href="css/estils.css" rel="stylesheet">

	 </head>
	  
	 <body>

		<div class="container">

		  <!-- Static navbar -->
		  <nav class="navbar navbar-default">
			<div class="container-fluid">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Base de dades Futbol</a>
			  </div>
			  <div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				  <li><a href="insertar.php">Insertar</a></li>
				  <li><a href="modificar.php">Modificar</a></li>
				  <li><a href="eliminar.php">Eliminar</a></li>
				  <li class="dropdown, active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mostar<span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="equips.php">Mostrar equips per nom</a></li>
					  <li><a href="titols.php">Mostrar títols</a></li>
					</ul>
				  </li>
				</ul>
			  </div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		  </nav>
		  <div class="jumbotron">
			  <div class="container">
				<h1 class="display-4">Base de dades de fútbol</h1>
				<p class="lead">De: José María Samos Diago</p>
			  </div>
		  </div>
		  <!--Carousel-->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img class="first-slide" src="img/pelota.jpg" alt="First slide">
				  <div class="container">
					<div class="carousel-caption">
					  <h1>Example headline.</h1>
					  <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
					  <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
					</div>
				  </div>
				</div>
				<div class="item">
				  <img class="second-slide" src="img/camp.jpg" alt="Second slide">
				  <div class="container">
					<div class="carousel-caption">
					  <h1>Another example headline.</h1>
					  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
					</div>
				  </div>
				</div>
				<div class="item">
				  <img class="third-slide" src="img/messi.jpg" alt="Third slide">
				  <div class="container">
					<div class="carousel-caption">
					  <h1>One more for good measure.</h1>
					  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
					</div>
				  </div>
				</div>
			  </div>
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		  <!--Fin Carousel-->
		  <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>PHP</h2>
		  <?php
			echo "<p>Esto esta escrito en PHP</p>";
		  ?>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
  </body>
</html>