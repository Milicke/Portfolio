// window.onload = function () {


//     var username = document.getElementById('dodaj_clana').value;

    
// }

var ucesnici = [];

function dodajClana(id){

    var username = document.getElementById('clan').value;

    document.getElementById('clan').value = "";
    document.getElementById('clan').focus();


    if(!ucesnici.includes(username))
    {

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                if(this.responseText == "Ucesnik vec ucestvuje na dogadjaju" || this.responseText == "Ne postoji ucesnik")
                {
                    document.getElementById("greska").innerHTML = this.responseText;
                    document.getElementById("greska").style.visibility = "visible";         
                }
                else
                {
                    var id_u = this.responseText;
                                      
                    var ispis = "<div id = '" + id_u + "' class='row clanovi'>";
                    ispis += "<div class='col-sm-9'><span id='s" + id_u + "' class='ime_clana'>" + id_u + "</span></div>";
                    ispis += "<div class='col-sm-3' style = 'display:flex;justify-content: center;align-items: center;'><img onclick='obrisi(\""+ id_u +"\")' src = '../assets/media/kanta.svg' onmouseover ='crveno(\""+ id_u +"\")' onmouseleave ='nije_crveno(\""+ id_u +"\")' style='width:30px;height:30px;'></div>";
                    ispis += "</div>";

                    document.getElementById("desni_div").innerHTML += ispis;
                    document.getElementById("nevidljiv").value += this.responseText + ",";
                    ucesnici.push(this.responseText);
                    console.log("Ucesnici: " + document.getElementById("nevidljiv").value); 
                    document.getElementById("greska").innerHTML = "Unet clan";
                    document.getElementById("greska").style.visibility = "hidden";
                }
            }
        };
        xhr.open("GET", "pretraga_clanova.php?username=" + username + "&id=" + id, true);
        xhr.send();
    }
    else
    {
        document.getElementById("greska").innerHTML = "Ucesnik vec postoji u timu!";
        document.getElementById("greska").style.visibility = "visible";
    }
}

function crveno(id_ucesnika){
    var d = document.getElementById(id_ucesnika);
    d.style.borderColor = "red";
    d.style.fontcolor = "red";
    document.getElementById("s" + id_ucesnika).style.color = "red";
    document.getElementById("s" + id_ucesnika).style.transition = "0.5s";
    d.style.transition = "0.5s";
}
function nije_crveno(id_ucesnika){
    var d = document.getElementById(id_ucesnika);
    d.style.borderColor = "#66FCF1";
    document.getElementById("s" + id_ucesnika).style.color = "#66FCF1";
}

function obrisi(id_ucesnika){

    var str = document.getElementById("nevidljiv").value;
    // timovi_niz = str.split(",");
    // console.log(timovi_niz);

    // if(timovi_niz.length > 1)
    //     timovi_niz.pop();

    // console.log(timovi_niz.indexOf(id_ucesnika));
    // console.log(timovi_niz);
    var index = ucesnici.indexOf(id_ucesnika);
    ucesnici.splice(index, 1);


    //var ukloni = document.getElementById("id_ucesnika");
    var c = document.getElementById("desni_div").childNodes;
    //console.log(index);
    console.log(c);
    //c[0].remove();
    c[index + 1].remove();
    console.log(c);
    // var dd = document.getElementById("desni_div");
    // console.log(dd.childNodes[0]);
    // dd.removeChild(dd.childNodes[index]);
    // console.log("DDDDDDDDD" + dd);
    //ukloni.remove();

    if(ucesnici.length == 0)
        document.getElementById("nevidljiv").value = ucesnici.toString();
    else
        document.getElementById("nevidljiv").value = ucesnici.toString() + ',';
    console.log("Ucesnici1:" + document.getElementById("nevidljiv").value);
    //console.log(ucesnici.toString());
    //console.log(c);
}


// var dodat = document.getElementById("dodaj_clana");
// dodat.addEventListener("click", function(e){

//     //e.preventDefault();

//     var p = document.getElementsByClassName("fa-trash-o");
//     console.log(p);

//     p.addEventListener("click", function(){
//         console.log("KLIKNUOOOOO");
//     });

// });


// var dodavanje =  document.getElementById("desni_div");

//     dodavanje.addEventListener("change", function(){
//         console.log("Dovde radi");

//         var trash = document.getElementsByClassName("fa-trash-o");
//         trash.addEventListener("click", function(e){

//             console.log("Kliknuto");
//         e.preventDefault();
//             var par = e.target.parentNode.id;
//             var t_id = e.target.id;
//             var user = document.getElementById("t_id").parentElement.id;
//             var user1 = e.target.parentNode.id;
//             console.log("Prvi " + par);
//             console.log("Drugi " + par);
//     });


//     })


function Validacija()
{
    //console.log(ucesnici);
    //if(ucesnici.length == 0)
    //{
    //    document.getElementById("greska").innerHTML = "Morate uneti bar jednog clana!!!";
    //    document.getElementById("greska").style.visibility = "visible";
     //   return false;
    //}
    

    var naziv = document.getElementById("naziv").value;
    if(naziv.length < 3 || naziv.length > 15)
    {
        document.getElementById("greska").innerHTML = "Naziv tima mora da sadrži izmedju 3 i 15 karaktera!!!";
        document.getElementById("greska").style.visibility =  "visible";
		return false;
    }
    document.getElementById('zavrsi').onclick = function(){

        ucesnici = [];
    }
}