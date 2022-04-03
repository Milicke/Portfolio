function Validacija()
{
    let ime = document.querySelector("#ime").value;
    let prezime = document.querySelector("#prezime").value;
    let mail = document.querySelector("#mail").value;
    let korime = document.querySelector("#korime").value;
    let pass = document.querySelector("#sifra").value;
    let alert = document.querySelector("#alert");

    if(ime == "" || prezime == "" || mail == "" || korime == "" || pass == "")
    {
        alert.innerHTML = "Sva polja moraju biti popunjena!!!";
        document.getElementById("alert").style.visibility =  "visible";
        return false;
    }

    if(!(/^[a-zA-Z]+$/).test(ime))
	{
		alert.innerHTML = "Polje ime mora da sadrzi samo slova!!!";
        document.getElementById("alert").style.visibility =  "visible";
		return false;
	}

    if(!(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(mail)))
    {
        alert.innerHTML = "E-mail nije u dobrom formatu!!!";
        document.getElementById("alert").style.visibility =  "visible";
		return false;
    }
    if(korime.length < 3 || korime.length > 8)
    {
        alert.innerHTML = "Korisničko ime mora da sadrži izmedju 3 i 8 karaktera!!!";
        document.getElementById("alert").style.visibility =  "visible";
		return false;
    }

    if(prezime.length < 2 || prezime.length > 15)
    {
        alert.innerHTML = "Prezime mora da sadrži izmedju 2 i 15 karaktera!!!";
        document.getElementById("alert").style.visibility =  "visible";
		return false;
    }

    if(ime.length < 2 || ime.length > 15)
    {
        alert.innerHTML = "Ime mora da sadrži izmedju 2 i 15 karaktera!!!";
        document.getElementById("alert").style.visibility =  "visible";
		return false;
    }

    if(pass.length < 3 || pass.length > 12)
    {
        alert.innerHTML = "Šifra mora da sadrži izmedju 3 i 12 karaktera!!!";
        document.getElementById("alert").style.visibility =  "visible";
		return false;
    }
}