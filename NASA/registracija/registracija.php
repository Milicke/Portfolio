<?php 

    $title = "Registracija";
    require "../header.php";

?>

<body>
    <section>
        <div class="login">
            <form class = "forma" method="post" action="unos.php" onsubmit = "return Validacija()">
                <h1>Registracija</h1>
                <p class="upozorenje" style = "color:red" id = "alert">Poruka upozorenja</p>
                <div class="imeprezime">
                    <div class="unos">
                        <img src="../media/user-regular.svg" alt="user-icon">
                        <input id = "ime" class = "form-unos" type="text" name="ime" placeholder = "Ime">
                    </div>

                    <div class="unos">
                        <img src="../media/user-regular.svg" alt="user-icon">
                        <input id = "prezime" class = "form-unos" type="text" name="prezime" placeholder = "Prezime">
                    </div>
                </div>
                <div class="unos">
                    <img src="../media/at-solid.svg" alt="mail-icon">
                    <input id = "mail" class = "form-unos" type="email" name="email" placeholder = "E-mail">
                </div>

                <div class="unos">
                    <img src="../media/user-regular.svg" alt="user-icon">
                    <input id="korime" class = "form-unos" type="text" name="k_ime" placeholder = "Korisničko ime">
                </div>

                <div class="unos">
                    <img src="../media/key-solid.svg" alt="user-icon">
                    <input id = "sifra" class = "form-unos" type="password" name="sifra" placeholder = "Šifra">
                </div>



                <input class = "submit" type="submit" name="posRegistraciju" value = "Registruj se">
            </form>

        </div>
    </section>
    <script src="./Validacija.js"></script>
</body>

<?php

    require '../footer.php';

?>