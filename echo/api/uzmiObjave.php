<?php

	session_start();
	if(isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;
	
	if(isset($_GET["limit"]))
		$limit = $_GET["limit"];
	else
		$limit = 10;
	$offset = ($page - 1) * $limit;

	$vrati = array();

	require("../handlers/DataBaseConfig.php");

	$ukupnoRedova = $conn->query('SELECT COUNT(*) AS "ukupno" FROM objave')->fetch_assoc()["ukupno"];
	$ukupnoStrana = ceil($ukupnoRedova / $limit);

	$vrati["ukupnoStrana"] = $ukupnoStrana;

	
	if(isset($_SESSION["user"]))
		$vrati["user"] = $_SESSION["user"];	// ulogovani user
	else
		$vrati["user"] = null;

	$sql = "SELECT * FROM objave " .
			"ORDER BY id DESC " . 
			"LIMIT " . $offset . ", " . $limit;
	$rezultat = $conn->query($sql);
	if(mysqli_num_rows($rezultat) > 0)
	{
		$objave = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
		foreach($objave as $key => $value)
		{
			if(isset($_SESSION["user"]))
			{
				$sql = "SELECT * FROM lajkovi " .
					" WHERE id_korisnika=" . $vrati["user"]["id"] . 
					" AND id_objave=" . $objave[$key]["id"];
				$rezultat = $conn->query($sql);
				if($rezultat->num_rows > 0)
					$objave[$key]["liked"] = true;
				else
				$objave[$key]["liked"] = false;
			}
			else
				$objave[$key]["liked"] = false;
			$sql = "SELECT * FROM korisnici WHERE id=" . $objave[$key]["id_kor"];
			$rezultat = $conn->query($sql)->fetch_assoc();
			$objave[$key]["autor"] = $rezultat["korisnicko_ime"];
		}
	}
	else
		$objave = array();

	$vrati["objave"] = $objave;

	echo json_encode($vrati);
?>