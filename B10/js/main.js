function Prevedi() {
    let izbor = document.querySelector("#jezik").value;
    if(izbor == "default") {
        alert("Morate izabrati smer prevodjenja!");
        return false;
    }
    else if(izbor == "srpski") {
        let eng = document.querySelector("#Erec").value;
        let svi;
        let provera = false;
        var xml = new XMLHttpRequest();
        xml.open("GET", `./js/api.php`);
        xml.onload = function() {
            svi = JSON.parse(this.responseText);
            svi.forEach(element => {
                if(element["engleski"] == eng) {
                    document.querySelector("#Srec").value = element["srpski"];
                    document.querySelector("#opis").value = element["opis"];
                }
            });
            if(!provera)alert("Ta rec ne postoji u bazi!");
        }
        xml.send();
        
    }
    else {
        let eng = document.querySelector("#Srec").value;
        let svi;
        let provera = false;
        var xml = new XMLHttpRequest();
        xml.open("GET", `./js/api.php`);
        xml.onload = function() {
            svi = JSON.parse(this.responseText);
            svi.forEach(element => {
                if(element["srpski"] == eng) {
                    provera = true;
                    document.querySelector("#Erec").value = element["engleski"];
                    document.querySelector("#opis").value = element["opis"];
                }
            });
            if(!provera)alert("Ta rec ne postoji u bazi!");
        }
        xml.send();
    }
    return false;
}