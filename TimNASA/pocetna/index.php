<?php 

    $title = "Pocetna";
    require "../header.php";

?>

<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../images/slika1.jpg" alt="First slide">
                <div class="centar">
                    <!--<div class="carousel-caption d-none d-md-block">-->
                    <h3>Sportski događaji</h3><br>
                    <p>Organizuj svoj ili učestvuj na već postojećim događajima! Registruj se i pokaži svoje umeće u raznim disciplinama!</p>
                    <!--</div>-->
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/slika2.jpg" alt="Second slide">
                <div class="centar">
                    <!--<div class="carousel-caption d-none d-md-block">-->
                    <h3>Želiš da se prijaviš?</h3><br>
                    <p>Želiš li da postaneš deo našeg tima? Sada je to samo na korak od tebe, sve što treba da uradiš je da se prijaviš i da veruješ u sebe!</p>
                    <a href="../login/login.php"><button class="klik">Prijavi se</button></a>
                    <!--</div>-->
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/slika3.jpg" alt="Third slide">
                <div class="centar">
                    <!--<div class="carousel-caption d-none d-md-block">-->
                    <h3>Takmiči se!</h3><br>
                    <p>Izaberi svoju omiljenu disciplinu i pokaži šta znaš!</p>
                    <div class="dugmici">
                        <a href="#1"><button id="button1" class="klik">Organizuj takmičenje</button></a>
                        <a href="#1"><button id="button1" class="klik">Registruj se</button></a>
                    </div>

                    <!--</div>-->
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/slika5.png" alt="Fifth slide">
                <div class="centar">
                    <!--<div class="carousel-caption d-none d-md-block">-->
                    <h3>Pogledaj događaje</h3><br>
                    <p>Prikazaćemo ti neke od najzanimljivijih događaja u tvojoj blizini! Saznaj vreme i mesto održavanja!</p>
                    <a href="#2"><button class="klik">Pogledaj događaje</button></a>
                    <!--</div>-->
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
<section id="1">
    <div class="text-center">
        <h3>Takmiči se i upoznaj ostale učenike</h3>
    </div>
    <div class="col-md-12 d-flex justify-content-center sekP">
        <div class="col-md-6 text-center">
            <i class="far fa-clipboard"></i>
            <h4>Organizuj takmičenje!</h4>
            <a href="../organizujDogadjaj/novDogadjaj.php"><button class="klik">Organizuj takmičenje</button></a>
        </div>
        <div class="col-md-6 text-center">
            <i class="fas fa-user-circle"></i>
            <h4>Još uvek nemaš nalog?</h4>
            <a href="../registracija/registracija.php"><button class="klik">Registruj se</button></a>
        </div>
    </div>
</section>
<section id="2">
    <div class="text-center head2">
        <h3>Takmiči se i upoznaj ostale učenike</h3>
    </div>
    <div class="col-md-12 justify-content-center text-center btnD">
        <h4>Pogledajte sve događaje</h4>
        <a href="../organizujDogadjaj/sviDogadjaji.php"><button class="klik">Događaji</button></a>
    </div>
</section>

<?php require "../footer.php"; ?>