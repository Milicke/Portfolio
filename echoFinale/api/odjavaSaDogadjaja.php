<?php 
	session_start();
	require "../handlers/DataBaseConfig.php";
	$id_korisnika = $_SESSION["user"]["id"];
	$id_dogadjaja = $_GET["id"];

	$sql = "DELETE FROM kor_dogadjaj WHERE id_kor=$id_korisnika AND id_dogadjaj=$id_dogadjaja";
	$ok = $conn->query($sql);
	
	echo json_encode($ok);
?>