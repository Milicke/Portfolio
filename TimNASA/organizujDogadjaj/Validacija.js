function Validacija()
{
    let ime = document.getElementById("text-unos").value;
    let vreme = document.getElementById("vreme").value;
    let datum = document.getElementById("datum").value;
    let mesto = document.getElementById("mesto").value;
    let slika = document.getElementById("real-button").value;
    var alert = document.getElementById("alert");

    if(ime == "" || vreme == "" || datum == "" || mesto == "")
    {
        document.getElementById("alert").innerHTML = "Morate da popunite sva polja!!!";
        document.getElementById("alert").style.visibility = "visible";
        return false;
    }

    if(slika == "")
    {
        document.getElementById("alert").innerHTML = "Morate da unesete sliku!!!";
        document.getElementById("alert").style.visibility = "visible";
        return false;
    }

    if(!((vreme.search(/^\d{2}:\d{2}$/) != -1) &&(vreme.substr(0,2) >= 0 && vreme.substr(0,2) <= 23) && (vreme.substr(3,2) >= 0 && vreme.substr(3,2) <= 59)))
    {
        document.getElementById("alert").innerHTML = "Vreme nije u dobrom formatu";
        document.getElementById("alert").style.visibility = "visible";
        return false;
    }

    if(!(/^[a-zA-Z\s]+$/).test(mesto))
    {
        document.getElementById("alert").innerHTML = "Mesto nije u dobrom formatu";
        document.getElementById("alert").style.visibility = "visible";
        return false;
    }
    if(ime.length > 20)
    {
        alert.innerHTML = "Naziv događaja je predugačak!";
        document.getElementById("alert").style.visibility =  "visible";
		return false;
    }
    if(mesto.length < 2 || mesto.length > 20)
    {
        alert.innerHTML = "Mesto mora da sadrži između 2 i 20 karaktera!";
        document.getElementById("alert").style.visibility =  "visible";
		return false;
    }
}