<?php
function deleteImage($ime)
{
	//echo $ime;
	$direktorijum = '../assets/images/uploads/' . $ime;
	chown($direktorijum, 666);
	unlink($direktorijum);
}