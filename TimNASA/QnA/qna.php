<?php 

    $title = "QnA";
    require "../header.php";

?>
<head>
    <link rel="stylesheet" href="../assets/css/qna.css">
</head>
<hr>
<section>
    <div class="qna">
        <button class="accordion">Kako organizovati događaj?</button>
        <div class="panel">
            <p>Imate odličnu ideju i organizaciju, a ne znate kako da raširite glas o njoj? Mi vam baš nudimo tu mogućnost. Idite na stranicu pod nazivom 'Nov događaj' i kreirajte svoj događaj. Za uzvrat ne tražimo ništa, a ono što možemo obećati je da će ceo region saznati za vaš događaj!</p>
        </div>

        <button class="accordion">Kako se pridružiti događaju?</button>
        <div class="panel">
            <p>Događaje organizuju ljudi širom Srbije i možete se pridružiti bilo kojem javnom događaju i tako sklopiti nova poznanstva! Klikom na dugme 'Svi događaji' možete pogledati sve događaje u vašem okruženju i detaljne informacije o njima.</p>
        </div>

        <button class="accordion">Da li mogu da otkažem događaj koji sam ogranizovao?</button>
        <div class="panel">
            <p>Možete u bilo kom trenutku otkazati organizovan događaj i svim korisnicima ovog sajta koji su trebali da prisustvuju događaju će stići mejl da je događaj otkazan tako da ne morate da javljate svakom korisniku ponaosob.</p>
        </div>

        <button class="accordion">Hoću li biti obavešten ukoliko organizator promeni vreme ili mesto održavanja događaja?</button>
        <div class="panel">
            <p>Sve naknadne izmene će biti postavljene na stranici 'Svi događaji' i učesnici će biti obavešteni putem mejla.</p>
        </div>

        <button class="accordion">Da li moram da napravim nalog da bih učestvovao na događajima ili organizovao svoj?</button>
        <div class="panel">
            <p>Morate da napravite nalog za organizovanje ili učestvovanje na događajima, ali svi posetioci sajta mogu da vide koliko timova će učestvovati na događaju.</p>
        </div>
    </div>
</section>

<hr>

<script src="./accordion.js"></script>
<?php require "../footer.php"; ?>