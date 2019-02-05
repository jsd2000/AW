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
				  <li class="active"><a href="eliminar.php">Eliminar</a></li>
				  <li class="dropdown">
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
						<form name="formulari3" method="get" action="delete.php">
							Codi: <input type="text" name="codi" value="">
							<br>
							<br>
							<input type="submit" value="ELIMINAR" class="btn btn-primary">
						</form>
			  </div>
		  </div>
		  <!-- Main jumbotron for a primary marketing message or call to action -->
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "futbol";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Conexión fallida: " . $conn->connect_error);
			}
			
			$sql = "SELECT codi, nom FROM equips";
			$result = $conn->query($sql);
			
			echo "<table class=\"table table-striped table-bordered table-hover\">";
			echo "<tr><th>Codi</th><th>Equip</th></tr>";
			if ($result->num_rows > 0){
				while($row=$result->fetch_assoc()){
					echo "<tr><td>".$row["codi"]."</td><td>".$row["nom"]."</td></tr>";
				}
			}
			echo "</table>";
			
		?>
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
		<?php
			$conn->close();
		?>
  </body>
</html>