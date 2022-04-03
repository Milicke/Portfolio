var page = 1;
var limit = 6;
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
    var objave = json.objave;
    total = json.ukupnoStrana;

    trenutna.firstElementChild.innerText = page;

    var div = document.createElement("div");
    div.className = "cards row";
    if (json.user.admin == 0)
        div.classList.add("testx");
    div.id = "cards";

    if (objave.length === 0) {
        div.innerHTML = "<p class = 'nemanje'>There are no posts yet!</p>";
    } else
        for (let i in objave)
            div.appendChild(NovaObjava(objave[i]));
    var kartice = document.getElementById("cards");
    if (kartice)
        kartice.remove();
    var loading = document.getElementById("loading");
    if (loading)
        loading.remove();
    var container = document.getElementById("posts-container");
    container.appendChild(div);

    var like = Array.from(document.getElementsByClassName("icon"));
    for (let i in like) {
        like[i].addEventListener("click", (e) => {
            var liked = e.currentTarget;
            var id = parseInt(liked.id.substring(4));
            var counter = document.getElementById(`br_lajk${id}`);
            if (!liked.classList.contains("liked")) {
                Like(id);
                counter.innerText = parseInt(counter.innerText) + 1;
                liked.style.color = "red";
                liked.classList.add("liked");
            } else {
                Dislike(id);
                counter.innerText = parseInt(counter.innerText) - 1;
                liked.style.color = "white";
                liked.classList.remove("liked");
            }
        })
    }
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
        window.location.href = "./Eobjavu.php";
    }
    xml.send();
}

function Delete(id) {
    var xml = new XMLHttpRequest();
    xml.open("GET", `./postaviID.php?id=${id}`);
    xml.onload = function() {
        window.location.href = "./Dobjavu.php";
    }
    xml.send();
}

function Like(id) {
    var xml = new XMLHttpRequest();
    xml.open("GET", `../api/like.php?id=${id}`);
    xml.onload = function() {
        var res = JSON.parse(this.responseText);
        if (res.error)
            alert("Neuspesan like");
    };
    xml.send();
}

function Dislike(id) {
    var xml = new XMLHttpRequest();
    xml.open("GET", `../api/dislike.php?id=${id}`);
    xml.onload = function() {};
    xml.send();
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
		<div class = "card col-md-4">
			<div class = "postCnt">
				<img src="../assets/images/uploads/${objava.slika}" alt="las vegas">
			</div> 
			<div class="details">
				<i id = "lajk${objava.id}" class="fa fa-thumbs-up icon ${objava.liked ? 'liked' : ''}"
				style = "color: ${objava.liked? "red" : "white"};position:absolute;right:0;top:0;margin-right:10px;margin-top:20px;overflow-y:hidden;border:none;">
				</i>
				<p id = "br_lajk${objava.id}" style = "position:absolute;right:0;top:0;margin-right:5px;margin-top:20px;overflow-y:hidden;border:none;color:white">${objava.br_lajkova}</p>
				<h3>${objava.naslov}</h3>
				<p style = "height: 150px;overflow-y:scroll" >${objava.sadrzaj}</p>
				${
					json.user.admin == 1 ?
					`<div class="adminFunction">
						<a id="edit${objava.id}" class="edit"><i class="fa fa-pencil-square" aria-hidden="true"></i>EDIT</a>
						<a id="delete${objava.id}" class="delete"><i class="fa fa-trash" aria-hidden="true"></i>DELETE</a>
					</div>` :
					""
				}
			</div>
		</div>
	`;
    var div = document.createElement("div");
    div.className = "card col-md-4";
    div.innerHTML = objavaString;
    return div;
}