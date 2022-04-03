<?php

	session_start();
	if(isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;
	
	if(isset($_GET["limit"]))
		$limit = $_GET["limit"];
	else
		$limit = 3;
	$offset = ($page - 1) * $limit;

	$vrati = array();

	require("../handlers/DataBaseConfig.php");

	$ukupnoRedova = $conn->query('SELECT COUNT(*) AS "ukupno" FROM recepti')->fetch_assoc()["ukupno"];
	$ukupnoStrana = ceil($ukupnoRedova / $limit);

	$vrati["ukupnoStrana"] = $ukupnoStrana;

	
	if(isset($_SESSION["user"]))
		$vrati["user"] = $_SESSION["user"];	// ulogovani user
	else
		$vrati["user"] = null;

	$sql = "SELECT * FROM recepti " .
			"ORDER BY id DESC " . 
			"LIMIT " . $offset . ", " . $limit;
	$rezultat = $conn->query($sql);
	if(mysqli_num_rows($rezultat) > 0)
	{
		$recepti = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
		foreach($recepti as $key => $value)
		{
			$sql = "SELECT * FROM korisnici WHERE id=" . $recepti[$key]["id_kor"];
			$rezultat = $conn->query($sql)->fetch_assoc();
			$recepti[$key]["autor"] = $rezultat["korisnicko_ime"];
		}
	}
	else
		$recepti = array();

	$vrati["recepti"] = $recepti;

	echo json_encode($vrati);
?>