<?php
	$servidor = "localhost";
	$usuari = "root";
	$password = "";
	$db = "futbol";

	$nom = $_REQUEST['nom'];
	$localitat = $_REQUEST['localitat'];
	$web = $_REQUEST['web'];
	$escut = $_REQUEST['escut'];

	
	// Create connection
	$conn = new mysqli($servidor, $usuari, $password, $db);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connexió KO: " . $conn->connect_error);
	} else {
			$sql = "INSERT INTO equips (nom, localitat, web, escut) 
					VALUES('" . $nom . "','" . $localitat . "','". $web . "','" . $escut . "')";

			if ($conn->query($sql) === TRUE) {
				echo "Registre creat amb èxit";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();
	}
	
	echo "<br><a href=\"equips.php\">Tornar a \"equips\"</a>";
?>