var page = 1;
var limit = 3;

Zahtev(page, limit, Odgovor);


function Odgovor(responseText) {
    var objave = JSON.parse(responseText).objave;
    var div = document.createElement("div");
    div.className = "cards row";

    var container = document.getElementById("posts-container");
    if (objave.length === 0) {
        div.innerHTML = `
		<div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
            <p style="color: #fff; font-size: 1.5rem;">NO NEW POST</p>
        </div>`;
    } else
        for (let i in objave)
            div.appendChild(NovaObjava(objave[i]));

    container.innerHTML = "";
    container.appendChild(div);
}

function Zahtev(strana, limit, callback) {
    var xml = new XMLHttpRequest();
    xml.open("GET", `../api/uzmiObjave.php?page=${strana}&limit=${limit}`);
    xml.onload = function() {
        callback(this.responseText)
    };
    xml.send();
}

function NovaObjava(objava) {
    var objavaString = `
		<div class="postCnt">
			<img src="../assets/images/uploads/${objava.slika}" alt="${objava.naslov}">
		</div>
		<div class="details">
			<h3>${objava.naslov}</h3>
			<p style = "height: 150px;overflow-y:scroll" >${objava.sadrzaj}</p>
		</div>
	`;
    var div = document.createElement("div");
    div.className = "card col-md-4";
    div.innerHTML = objavaString;
    return div;
}