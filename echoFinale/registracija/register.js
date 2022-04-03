

function Validacija()
{
	var php = document.getElementById("upozorenjephp");
	if(php)
		php.style.display = "none";

	var ime = document.querySelector("input[name='ime']").value;
	var prezime = document.querySelector("input[name='prezime']").value;
	var k_ime = document.querySelector("input[name='k_ime']").value;
	var mail = document.querySelector("input[name='mail']").value;
	var lozinka = document.querySelector("input[name='pass']").value;
	if(!ime || !prezime || !k_ime || !mail || !lozinka)
	{
		Poruka("Morate uneti sva polja!", php);
		return false;
	}
	if(!(/^[a-zA-Z]+$/).test(ime))
    {
        Poruka("Ime mora da sadrži samo slova", php);
        return false;
    }
	if(!(/^[a-zA-Z]+$/).test(prezime))
    {
        Poruka("Prezime mora da sadrži samo slova", php);
        return false;
    }
	if(!(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(mail)))
    {
        Poruka("Unesite validnu mail adresu", php);
        return false;
    } //!(/(?=.*[A-Z])(?=.*[a-z])(?=.*\d)/).test(lozinka)
	if(!((/[0-9]/g).test(lozinka) && (/[A-Z]/g).test(lozinka) && (/[a-z]/g).test(lozinka)))
	{
		Poruka("Lozinka mora da sadrži velika slova, mala slova i broj", php);
		return false;
	}
	document.getElementById("upozorenjejs").style.display = "none";
	if(php)
		php.style.display = "block";
	return true;
}

function Poruka(poruka,php)
{
	document.getElementById("upozorenjejs").innerHTML = poruka;
	document.getElementById("upozorenjejs").style.display = "block";
	if(php)
		php.style.display = "none";
}