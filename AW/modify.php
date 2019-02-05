<?php
	$servidor = "localhost";
	$usuari = "root";
	$password = "";
	$db = "futbol";

	$codi = $_REQUEST['codi'];
	$nom = $_REQUEST["nom"];
	$localitat = $_REQUEST['localitat'];
	$web = $_REQUEST['web'];
	$escut = $_REQUEST['escut'];

	
	// Create connection
	$conn = new mysqli($servidor, $usuari, $password, $db);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connexió KO: " . $conn->connect_error);
	} else {
			if ($nom!=NULL){
				$sql = "UPDATE equips SET nom=\"".$nom."\" WHERE codi = " . $codi;
			}
			
			if ($localitat!=NULL){
				$sql = "UPDATE equips SET localitat=\"".$localitat."\" WHERE codi = " . $codi;
			}
			
			if ($web!=NULL){
				$sql = "UPDATE equips SET web=\"".$web."\" WHERE codi = " . $codi;
			}
			
			if ($escut!=NULL) {
				$sql = "UPDATE equips SET escut=\"".$escut."\" WHERE codi = " . $codi;
			}
			
			

			if ($conn->query($sql) === TRUE) {
				echo "Registre modificat amb èxit";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();
	}
	
	echo "<br><a href=\"equips.php\">Tornar a \"equips\"</a>";
?>