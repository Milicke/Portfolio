<?php
    session_start();
    $title = "Početna";
    require "../header.php";
?>
        <!-- KAROSEL -->
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div id="logoDiv" class="carousel-item active">
                    <video autoplay muted loop id="myVideo">
                        <source src="../assets/video/video.mp4" type="video/mp4">
                    </video>
                    <div id="bg-div" class="bg-text">
                        <img src="../assets/images/logo1.png" alt="">
                        <h1>ISTRAŽI I POBEDI!</h1>
                        <p>Istraži dešavanja u tvom mestu i takmiči se!</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="mapDiv">
        <iframe scrolling="no" src="../maps/index.php" frameborder="0"></iframe>
        </div>
        <!-- X KAROSEL X -->
    
        <div class="nagrade">
<div class="cardPartner">
        <div class="circle"></div>
        <div class="content-partner">
            <h2>EchoMap</h2>
            <p>Naša aplikacija je namenjena srednjoškolcima i studentima u cilju da se motivišu na drštvene aktivnosti i da steknu nova poznanstva.</p>
        <a href="#">Pogledaj događaje</a>
        </div>
        <img src="../assets/images/upitnik.png" alt="">
    </div>
    <div class="cardPartner">
        <div class="circle"></div>
        <div class="content-partner">
            <h2>EchoMap</h2>
            <p>Nudimo razne aktivnosti, poput turnira na kojima možete da se rangirate na listi</p>
        <a href="#">Pogledaj listu</a>
        </div>
        <img src="../assets/images/kartica.png" alt="">
    </div>
</div>

<section class="partners">
    <h3>AKTIVNOSTI</h3>
    <div class="brand-layout container1">

            <div class="glide" id="glide1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <a href="#"><img src="../assets/images/friends.png" alt="Friends"></a>
                        </li>
                        <li class="glide__slide">
                            <a href="#"><img src="../assets/images/football.png" alt="Football"></a>
                        </li>
                        <li class="glide__slide">
                            <a href="#"><img src="../assets/images/cooking.png" alt="Cooking"></a>
                        </li>
                        <li class="glide__slide">
                            <a href="#"><img src="../assets/images/reading.png" alt="Reading"></a>
                        </li>    
                    </ul>
                </div>
            </div>
        </div>
    </section>

        <!-- FOOTER -->

        <?php
            require "../footer.php";
        ?>

        <!-- X FOOTER X -->


        <script src="../assets/js/video.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
        <script src="../assets/js/partneri.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>