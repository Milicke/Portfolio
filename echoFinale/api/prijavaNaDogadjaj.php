<?php 
	session_start();
	require "../handlers/DataBaseConfig.php";
	$id_korisnika = $_SESSION["user"]["id"];
	$id_dogadjaja = $_GET["id"];

	$sql = "INSERT INTO kor_dogadjaj (id_kor, id_dogadjaj) 
			VALUES ($id_korisnika, $id_dogadjaja)";
	$ok = $conn->query($sql);
	
	echo json_encode($ok);
?>