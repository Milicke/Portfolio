var page = 1;
var limit = 3;
var total = 0;
var json;

var prva = document.getElementById("prva");
var prethodna = document.getElementById("prethodna");
var trenutna = document.getElementById("trenutna");
var sledeca = document.getElementById("sledeca");
var poslednja = document.getElementById("poslednja");

prva.addEventListener("click", () => {
    page = 1;
    Zahtev(page, limit, Odgovor);
});

prethodna.addEventListener("click", () => {
    if (page === 1) return;
    page = page - 1;
    Zahtev(page, limit, Odgovor);
});
trenutna.addEventListener("click", () => {
    Zahtev(page, limit, Odgovor);
});
sledeca.addEventListener("click", () => {
    if (page === total) return;
    page = page + 1;
    Zahtev(page, limit, Odgovor);
});
poslednja.addEventListener("click", () => {
    page = total;
    Zahtev(page, limit, Odgovor);
});

Zahtev(page, limit, Odgovor);

function Odgovor(responseText) {
    json = JSON.parse(responseText);
    var recepti = json.recepti;
    total = json.ukupnoStrana;

    trenutna.firstElementChild.innerText = page;

    var div = document.createElement("div");
    div.className = "recipes";
    if (json.user.admin == 0)
        div.classList.add("testx");

    if (recepti.length === 0) {
        div.innerHTML = "<p style='color:white;font-size: 1.5rem; line-height: 30px; font-weight: 400; overflow-y: hidden;' class = 'nemanje'>There are no recipes yet!</p>";
    } else
        for (let i in recepti)
            div.appendChild(NovRecept(recepti[i]));
    var container = document.getElementById("recepti-container");
    container.innerHTML = ""
    container.appendChild(div);

    var edit = Array.from(document.getElementsByClassName("edit"));
    for (let i in edit) {
        edit[i].addEventListener("click", (e) => {
            Edit(e.currentTarget.id.substring(4));
        })
    }
    var deletes = Array.from(document.getElementsByClassName("delete"));
    for (let i in deletes) {
        deletes[i].addEventListener("click", (e) => {
            Delete(e.currentTarget.id.substring(6))
        })
    }
}

function Edit(id) {
    var xml = new XMLHttpRequest();
    xml.open("GET", `./postaviID.php?id=${id}`);
    xml.onload = function() {
        window.location.href = "./Erecept.php";
    }
    xml.send();
}

function Delete(id) {
    var xml = new XMLHttpRequest();
    xml.open("GET", `./postaviID.php?id=${id}`);
    xml.onload = function() {
        window.location.href = "./Drecept.php";
    }
    xml.send();
}


function Zahtev(strana, limit, callback) {
    var xml = new XMLHttpRequest();
    xml.open("GET", `../api/uzmiRecepte.php?page=${strana}&limit=${limit}`);
    xml.onload = function() {
        callback(this.responseText)
    };
    xml.send();
}

function NovRecept(recept) {
    var receptString = `
		<div class="reImg">
			<img src="../assets/images/uploads/${recept.slika}" alt="${recept.naziv}">
		</div>
		<div class="reCnt">
			<h3>${recept.naziv}</h3>
			<p class="startOf">Ingredients:</p>
			<p>${recept.sastojci}</p>
			<p class="startOf">Preparation:</p>
			<p>${recept.priprema}</p>
		</div>
		${
			json.user.admin == 1 ?
			`<div class="adminFunction">
				<a id="edit${recept.id}" class="edit"><i class="fa fa-pencil-square" aria-hidden="true"></i>EDIT</a>
				<a id="delete${recept.id}" class="delete"><i class="fa fa-trash" aria-hidden="true"></i>DELETE</a>
			</div>` :
			""
		}
	`;
    var div = document.createElement("div");
    div.className = "reCard";
    div.innerHTML = receptString;
    return div;
}