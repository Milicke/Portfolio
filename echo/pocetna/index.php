<?php
    session_start();
    $title = "Home page";
    require "../header.php";
?>
    <section>
        <div class="startImg">    
        </div>
        <div class="imgText">
            <h2>BE FIT</h2>
            <h1>EXPLORE BEAUTY OF EATING HEALTHY</h1>
            <p>Log in to our webpage and see what are benefits of living and eating healthy.</p>
        </div>
    </section>
    <section id=1 class="areaMem">
        <div class="members">
        <div class="teamCnt">
            <div class="teamCard">
                <div class="tcCnt">
                    <div class="teamImg"><img src="../assets/images/Stefan.jpg" alt="Stefan"></div>
                    <div class="teamTxt">
                        <h3>Stefan Milanović<br><span>Our nutritionist</span></h3>
                    </div>
                </div>
                <ul class="teamIc">
                <li style="--i:1">
                    <a href="https://www.facebook.com/stefan.milanovic.3956" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li style="--i:2">
                    <a href="https://www.instagram.com/milanov1cc/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li style="--i:3">
                    <a href="http://estsnikolatesla.edu.rs" target="_blank"><i class="fa fa-university" aria-hidden="true"></i></a>
                </li>
            </ul>
            </div>
            <div class="teamCard">
                <div class="tcCnt">
                    <div class="teamImg"><img src="../assets/images/Aleksa.jpg" alt="Stefan"></div>
                    <div class="teamTxt">
                        <h3>Aleksa Milić<br><span>Our nutritionist</span></h3>
                    </div>
                </div>
                <ul class="teamIc">
                <li style="--i:1">
                    <a href="https://www.facebook.com/aleksamilickv/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li style="--i:2">
                    <a href="https://www.instagram.com/milicc_aleksa/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li style="--i:3">
                    <a href="http://estsnikolatesla.edu.rs" target="_blank"><i class="fa fa-university" aria-hidden="true"></i></a>
                </li>
            </ul>
            </div>
            <div class="teamCard">
                <div class="tcCnt">
                    <div class="teamImg"><img src="../assets/images/Mihajlo.jpg" alt="Mihajlo"></div>
                    <div class="teamTxt">
                        <h3>Mihajlo Milojević<br><span>Our nutritionist</span></h3>
                    </div>
                </div>
                <ul class="teamIc">
                <li style="--i:1">
                    <a href="https://www.facebook.com/mihajlo.milojevic.54" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li style="--i:2">
                    <a href="https://www.instagram.com/milojevicmihajlo/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li style="--i:3">
                    <a href="http://estsnikolatesla.edu.rs" target="_blank"><i class="fa fa-university" aria-hidden="true"></i></a>
                </li>
            </ul>
            </div>
            <div class="teamCard">
                <div class="tcCnt">
                    <div class="teamImg"><img src="../assets/images/Ana.jpg" alt="Ana"></div>
                    <div class="teamTxt">
                        <h3>Ana Luković<br><span>Our nutritionist</span></h3>
                    </div>
                </div>
                <ul class="teamIc">
                <li style="--i:1">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li style="--i:2">
                    <a href="https://www.instagram.com/_ana_lukovic/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li style="--i:3">
                    <a href="http://estsnikolatesla.edu.rs" target="_blank"><i class="fa fa-university" aria-hidden="true"></i></a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </section>
    <div class="postTitle"><h3>Fresh posts</h3></div>
    <section class="posts" id="posts-container">
    <div class="cards">
        <div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;" class="message">
            <img style="width: 5vw; height: 5vw;" src="../assets/images/Loading.gif" alt="LOADING">
        </div>
    </div>
    </section>
    <script src="./najnovije.js"></script>
    <script>
        function changeBtn(x) {
            x.classList.toggle("change");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<?php
    require "../footer.php";
?>