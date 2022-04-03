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

	$odgovor = array();

	require("../handlers/DataBaseConfig.php");

	$ukupnoRedova = $conn->query('SELECT COUNT(*) AS "ukupno" FROM dogadjaji')->fetch_assoc()["ukupno"];
	$ukupnoStrana = ceil($ukupnoRedova / $limit);

	$odgovor["ukupnoStrana"] = $ukupnoStrana ? $ukupnoStrana : 1;

	if(isset($_SESSION["user"]))
		$odgovor["user"] = $_SESSION["user"];	// ulogovani user
	else
		$odgovor["user"] = null;

	$sql = "SELECT * FROM dogadjaji " .
			"ORDER BY id DESC " . 
			"LIMIT " . $offset . ", " . $limit;
	$rezultat = $conn->query($sql);
	if(mysqli_num_rows($rezultat) > 0)
	{
		$dogadjaji = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
		foreach($dogadjaji as $key => $value)
		{
			$sql = "SELECT * FROM kor_dogadjaj " .
					" WHERE id_kor=" . $_SESSION["user"]["id"] . 
					" AND id_dogadjaj=" . $dogadjaji[$key]["id"];
			$rezultat = $conn->query($sql);
			if($rezultat->num_rows > 0)
				$dogadjaji[$key]["prijavljen"] = true;
			else
				$dogadjaji[$key]["prijavljen"] = false;
		}
	}
	else
		$dogadjaji = array();

	$odgovor["dogadjaji"] = $dogadjaji;

	echo json_encode($odgovor);
?>