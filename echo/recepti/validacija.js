function Validacija(slikaObavezna)
{
	var naziv = document.KForm.naziv.value;
	var slika = document.KForm.slika.files[0];
	var priprema = document.KForm.priprema.value;
	var sastojci = document.KForm.sastojci.value;
	
	var upozorenje = document.getElementById("upozorenje");

	if(!naziv || !priprema || !sastojci)
	{
		upozorenje.innerText = "You must enter all fields!";
		return false;
	}
	if(!slika && slikaObavezna)
	{
		upozorenje.innerText = "You must select an image!";
		return false;
	}
	if(naziv.length > 35)
	{
		upozorenje.innerText = "Your title is too large!";
		return false;
	}
	if(sastojci.length > 700)
	{
		upozorenje.innerText = "Your ingredients text is too large!";
		return false;
	}
	if(priprema.length > 700)
	{
		upozorenje.innerText = "Your preparation text is too large!";
		return false;
	}
	return true;
}