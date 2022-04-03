<?php 

    $title = "Pocetna";
    require "../header.php";

?>
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../media/slika1.jpg" alt="First slide">
                <div class="centar">
                    <h3>HUMANLY.GG</h3><br>
                    <p>Podrži zajednicu i pomozi humanitarnim organizacijama u prikupljanju sredstava za pomoć ljudima u nevolji i osvoji vredne nagrade!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../media/slika2.jpg" alt="Second slide">
                <div class="centar">
                    <h3>Želiš da se prijaviš?</h3><br>
                    <p>Želiš li da postaneš deo našeg tima? Sada je to samo na korak od tebe, sve što treba da uradiš je da se prijaviš i da veruješ u sebe!</p>
                    <a href="../login/login.php"><button class="klik">Prijavi se</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../media/slika3.jpg" alt="Third slide">
                <div class="centar">
                    <h3>Takmiči se!</h3><br>
                    <p>Izaberi sebi najzanimljivije takmičenje i pokaži sta znaš!</p>
                    <div class="dugmici">
                        <a href="#1"><button id="button1" class="klik">Pogledaj takmičenja</button></a>
                        <a href="#1"><button id="button1" class="klik">Rang lista</button></a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section id="services" class="container oIgrama">
    <div class="sectiontitle">
        <h5>Takmiči se</h5>
    </div>
    <ul class="row">
        <li class="col-md-4">
            <article><a href="#"><i class="fas fa-gamepad"></i></a>
                <h6 class="heading">CS:GO</h6>
                <p>Counter-Strike: Global Offensive je taktička pucačina iz prvog lica razvijena od strane Hidden Path Entertainment i korporacije Valve. To je četvrta igra u Counter-Strike serijalu.</p>
                <a href="../takmicenja/takmicenja.php"><button class="takmicenja">Prijavi se na takmičenje</button></a>
            </article>
        </li>
        <li class="col-md-4">
            <article><a href="#"><i class="fas fa-gamepad"></i></a>
                <h6 class="heading">League of Legends</h6>
                <p>League of Legends je višekorisnička onlajn borbena arena koju je razvila i izdala kompanija Riot Games za Windows i MacOS. Igra koristi Frimium model i podržana je mikrotransakcijama.</p>
                <a href="../takmicenja/takmicenja.php"><button class="takmicenja">Prijavi se na takmičenje</button></a>
            </article>
        </li>
        <li class="col-md-4">
            <article><a href="#"><i class="fas fa-gamepad"></i></a>
                <h6 class="heading">Rocket League</h6>
                <p>Rocket League je automobilska fudbalska video igra koju je razvio i objavio Psyonix. Igra je dostupna na Microsoft Windows-u, PlayStation-u 4, Xbox-u One i Nintendo Switch-u. Uživajte u vožnji.</p>
                <a href="../takmicenja/takmicenja.php"><button class="takmicenja">Prijavi se na takmičenje</button></a>
            </article>
        </li>
    </ul>
</section>
<section class="pobednici">
    <h4>Pobednici prošlog meseca</h4>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Korisničko ime</th>
                <th scope="col">Level</th>
                <th scope="col">Avatar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>andro02</td>
                <td>15</td>
                <td><img src="../rangLista/slike/1_lv2.png" alt="Avatar"></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>dubi02</td>
                <td>13</td>
                <td><img src="../rangLista/slike/1_lv2.png" alt="Avatar"></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>milicke</td>
                <td>10</td>
                <td><img src="../rangLista/slike/3_lv1.png" alt="Avatar"></td>
            </tr>
        </tbody>
    </table>
    <div class="nagrade">
        <section id="services" class="container prikazNagrada">
            <div class="sectiontitle">
                <h6>Nagrade</h6>
            </div>
            <ul class="row">
                <li class="col-md-4">
                    <article><a href="#"><i class="fas fa-keyboard"></i></a>
                        <h6 class="heading">I mesto</h6>
                        <p>Nagrada za prvo mesto ove sezone je White Shark tastatura.</p>
                    </article>
                </li>
                <li class="col-md-4">
                    <article><a href="#"><i class="fas fa-headphones"></i></a>
                        <h6 class="heading">II mesto</h6>
                        <p>Nagrada za dugo mesto ove sezone su White Shark slušalice.</p>
                    </article>
                </li>
                <li class="col-md-4">
                    <article><a href="#"><i class="fas fa-mouse"></i></a>
                        <h6 class="heading">III mesto</h6>
                        <p>Nagrada za teće mesto ove sezone je White Shark miš.</p>
                    </article>
                </li>
            </ul>
        </section>
    </div>
</section>
<section class="krajSajta">
    <h5>Sponzori</h5>
    <div class="sponzori">
        <img src="../media/fon.jpg" alt="FON logo">
        <img src="../media/wShark.jpg" alt="White Shark logo">
        <img src="../media/ebl.png" alt="EBL logo">
        <img src="../media/hosting.jpg" alt="Hosting logo">
    </div>
</section>
<?php

    require '../footer.php';

?>