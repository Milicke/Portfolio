<?php

	session_start();
	

	if(isset($_SESSION["user"]))
	{
		require "../handlers/DataBaseConfig.php";
		$vrati = array();
		$vrati["error"] = null;

		$id_objave = $_GET["id"];
		$id_korisnika = $_SESSION["user"]["id"];

		try
		{
			$sql = "INSERT INTO lajkovi (id_korisnika, id_objave)" .
					"VALUES (" . $id_korisnika . ", " . $id_objave . ")";
			$conn->query($sql);
			$sql = "SELECT br_lajkova FROM objave WHERE id=" . $id_objave;
			$broj_lajkova = $conn->query($sql)->fetch_assoc()["br_lajkova"];
			$sql = "UPDATE objave " .
					"SET br_lajkova = " . ($broj_lajkova + 1) .
					" WHERE id=" . $id_objave;
			$conn->query($sql);
		}
		catch(Exception $greska)
		{
			$vrati["error"] =true;
		}

		echo json_encode($vrati);
	}
	else
		echo false;
	
?>