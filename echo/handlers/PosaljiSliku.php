<?php

if(isset($_POST["submit"]))
{
	require "./uploadImage.php";
	$poslato = false;
	$poslato = uploadImage($_FILES["slika"], "proba");
	if($poslato)
		echo "USPESNO";
	else
		echo "GRESKA";
}
?>