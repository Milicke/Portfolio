function Validacija(slikaObavezna)
{
	var naslov = document.KForm.naslov.value;
	var slika = document.KForm.slika.files[0];
	var sadrzaj = document.KForm.sadrzaj.value;

	var upozorenje = document.getElementById("upozorenje");

	if(!naslov || !sadrzaj)
	{
		upozorenje.innerText = "You must enter all fields!";
		return false;
	}
	if(!slika && slikaObavezna)
	{
		upozorenje.innerText = "You must select an image!";
		return false;
	}
	if(naslov.length > 35)
	{
		upozorenje.innerText = "Your title text is too large!";
		return false;
	}
	if(sadrzaj.length > 700)
	{
		upozorenje.innerText = "Your content text is too large!";
		return false;
	}
	return true;
}