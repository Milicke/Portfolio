<?php

	session_start();

	require("../handlers/DataBaseConfig.php");

	$odgovor = array();
	
	if(isset($_SESSION["user"]))
		$odgovor["user"] = $_SESSION["user"];	// ulogovani user
	else
		$odgovor["user"] = null;

	$sql = "SELECT * FROM kor_dogadjaji " .
			"ORDER BY id_dogadjaj DESC " . 
			"LIMIT " . $offset . ", " . $limit;
	$rezultat = $conn->query($sql);
	if(mysqli_num_rows($rezultat) > 0)
	{
		$dogadjaji = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
	}
	else
		$dogadjaji = array();

	$odgovor["dogadjaji"] = $dogadjaji;

	echo json_encode($odgovor);
?>