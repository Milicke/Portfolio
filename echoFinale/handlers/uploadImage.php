<?php
function uploadImage($slika, $ime)
{
	$ekstenzija = strtolower(pathinfo($slika["name"],PATHINFO_EXTENSION));
	$direktorijum = "../assets/images/uploads/" . $ime . "." . $ekstenzija;
	//echo $direktorijum;
	// Da li je slika stvarno slika
	$false = array("bool" => false);
	$true = array("bool" => true);
	$provera = getimagesize($slika["tmp_name"]);
	if($provera === false) 
		return $false;

	// Da li vec postoji fajl sa istim imenom
	if (file_exists($direktorijum)) 
		return $false;

	// Samo odredjeni formati
	if($ekstenzija != "jpg" && $ekstenzija != "png" && $ekstenzija != "jpeg" && $ekstenzija != "gif" ) 
		return $false;

	// Prebacivanje fajla na server
	if (move_uploaded_file($slika["tmp_name"], $direktorijum))
	{
		$true["ekstenzija"] = $ekstenzija;
		return $true;	//uspesno
	} 
	else 
		return $false;	//neuspesno
}