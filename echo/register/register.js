

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
		Poruka("You must enter all fields!", php);
		return false;
	}
	if(k_ime.length < 4 || k_ime.length > 20 || 
		lozinka.length < 4 || lozinka.length > 20)
	{
		Poruka("Username and password must be between 4 and 20 characters long", php);
		return false;
	}
	if(!(/^[a-zA-Z]+$/).test(ime))
    {
        Poruka("The name must contain only letters", php);
        return false;
    }
	if(!(/^[a-zA-Z]+$/).test(prezime))
    {
        Poruka("The last name must contain only letters", php);
        return false;
    }
	if(!(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(mail)))
    {
        Poruka("Please enter a valid email address", php);
        return false;
    } //!(/(?=.*[A-Z])(?=.*[a-z])(?=.*\d)/).test(lozinka)
	if(!((/[0-9]/g).test(lozinka) && (/[A-Z]/g).test(lozinka) && (/[a-z]/g).test(lozinka)))
	{
		Poruka("The password must contain a lowercase letter, a capital letter and a number", php);
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