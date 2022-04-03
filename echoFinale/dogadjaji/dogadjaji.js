var page = 1;
var limit = 4;
var total = 0;
var json;

var prva = document.getElementById("prva");
var prethodna = document.getElementById("prethodna");
var trenutna = document.getElementById("trenutna");
var sledeca = document.getElementById("sledeca");
var poslednja = document.getElementById("poslednja");

Zahtev(page, limit, Odgovor);

prva.addEventListener("click", () => {
    page = 1;
    Zahtev(page, limit, Odgovor);
});

prethodna.addEventListener("click", () => {
    if (page === 1) return;
    page--;
    Zahtev(page, limit, Odgovor);
});
trenutna.addEventListener("click", () => {
    Zahtev(page, limit, Odgovor);
});
sledeca.addEventListener("click", () => {
    if (page === total) return;
    page++;
    Zahtev(page, limit, Odgovor);
});
poslednja.addEventListener("click", () => {
    page = total;
    Zahtev(page, limit, Odgovor);
});

function Odgovor(responseText)
{
	json = JSON.parse(responseText);
	total = json.ukupnoStrana;
    trenutna.firstElementChild.innerText = page;

	const div = document.createElement("div");
	div.className = "container";
	const dogadjaji = json.dogadjaji;
	if (dogadjaji.length === 0) 
        div.innerHTML = "<p class = 'nemanje'>Jos uvek nema dogadjaja!</p>";
	else
		for(let dogadjaj in dogadjaji)
		{
			const nov = NovDogadjaj(dogadjaj);
			div.appendChild(nov);
		}
	const container = document.getElementById("cardArea");
	container.innerHTML = "";
	container.appendChild(div);
}

function Zahtev(strana, limit, callback) {
    var xml = new XMLHttpRequest();
    xml.open("GET", `../api/uzmiDogadjaje.php?page=${strana}&limit=${limit}`);
    xml.onload = function() {
        callback(this.responseText)
    };
    xml.send();
}

function Prijava(id, prijavljen, index)
{
	var xml = new XMLHttpRequest();
	if(prijavljen)
		xml.open("GET", `../api/odjavaSaDogadjaja.php?id=${id}`);
	else
    	xml.open("GET", `../api/prijavaNaDogadjaj.php?id=${id}`);
    xml.onload = function() {
        const usp = JSON.parse(this.responseText);
		if(usp)
		{
			json.dogadjaji[index].prijavljen = !json.dogadjaji[index].prijavljen;
			document.getElementById(`dog${id}`).innerText = json.dogadjaji[index].prijavljen ? "Odjavi se" : "Prijavi se";
			alert("Uspesno");
		}
		else
			alert("Neuspesno");
    };
    xml.send();
}

function NovDogadjaj(index)
{
	const dogadjaj = json.dogadjaji[index];
	let DogadjajString = `
	<div class="imgBx" data-text="${dogadjaj.naziv}">
		<img src="../assets/images/uploads/${dogadjaj.slika}" alt="${dogadjaj.naziv}">
	</div>
	<div class="content">
		<div>
			<h3>${dogadjaj.naziv}</h3>
			<p>${dogadjaj.opis}</p>
			<p>${dogadjaj.datum}</p>
			<button class="click"
				id="dog${dogadjaj.id}"
				onclick="Prijava(${dogadjaj.id}, ${dogadjaj.prijavljen}, ${index})"
			>
				${dogadjaj.prijavljen ? "Odjavi se" : "Prijavi se"}
			</button>
		</div>
	</div>
	`;
	const dogadjajDiv = document.createElement("div");
	dogadjajDiv.className = "card";
	dogadjajDiv.innerHTML = DogadjajString;
	return dogadjajDiv;
}