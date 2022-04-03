function Izmeni(id)
{
    document.getElementById("mesto"+id).disabled = false;
    document.getElementById("vreme"+id).disabled = false;
    var prijavi = document.getElementById("prijavi"+id);
    var izmeni = document.getElementById("izmeni"+id);
    var izbrisi = document.getElementById("izbrisi"+id);
    var sacuvaj = document.getElementById("sacuvaj"+id);
    if (izmeni.style.display === "none") 
    {
        izmeni.style.display = "block";
        prijavi.style.display = "block";
        izbrisi.style.display = "block";
        sacuvaj.style.display = "none";
    } 
    else 
    {
        izmeni.style.display = "none";
        prijavi.style.display = "none";
        izbrisi.style.display = "none";
        sacuvaj.style.display = "block";
    }
}

function Validacijaizmene(id)
{
    let mesto = document.getElementById("mesto"+id).value;
    let vreme = document.getElementById("vreme"+id).value;
    if(mesto == "" || vreme == "")
    {
        document.getElementById("upozorenje"+id).innerHTML = "Polja ne smeju biti prazna!!!";
        document.getElementById("upozorenje"+id).style.visibility = "visible";
        return false;
    }
    if(mesto.length > 15)
    {
        document.getElementById("upozorenje"+id).innerHTML = "Predugačak naziv mesta";
        document.getElementById("upozorenje"+id).style.visibility = "visible";
        return false;
    }
    if(mesto.length < 3)
    {
        document.getElementById("upozorenje"+id).innerHTML = "Prekratak naziv mesta";
        document.getElementById("upozorenje"+id).style.visibility = "visible";
        return false;
    }
    if(!((vreme.search(/^\d{2}:\d{2}$/) != -1) &&(vreme.substr(0,2) >= 0 && vreme.substr(0,2) <= 23) && (vreme.substr(3,2) >= 0 && vreme.substr(3,2) <= 59)))
    {
        document.getElementById("upozorenje"+id).innerHTML = "Vreme nije u dobrom formatu";
        document.getElementById("upozorenje"+id).style.visibility = "visible";
        return false;
    }

    if(!(/^[a-zA-Z\s]+$/).test(mesto))
    {
        document.getElementById("upozorenje"+id).innerHTML = "Mesto nije u dobrom formatu";
        document.getElementById("upozorenje"+id).style.visibility = "visible";
        return false;
    }
}