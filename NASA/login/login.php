<?php 

    $title = "Prijava";
    require "../header.php";

?>
    <section>
    <div class="login" style = "background-image: url('../media/login.jpg');">
        <form class = "forma" method="post" action="unos.php">
            <h1>Prijava</h1>
            <div id = "formuser" class="unos">
                <img src="../media/user-regular.svg" alt="user-icon">
                <input id = "text-unos" class = "form-unos" type="text" name="k_ime" placeholder = "Korisničko ime">
            </div>
            <div id = "pass" class="unos">
                <img src="../media/key-solid.svg" alt="user-icon">
                <input id = "text-unos" class = "form-unos" type="password" name="sifra" placeholder = "Šifra">
            </div>



            <input class = "submit" type="submit" name="posLogin" value = "Prijavi se">

            <h6>Nemate nalog? <a href="../registracija/registracija.php">Registruj se</a></h6>
        </form>

    </div>
</section>

<?php

    require '../footer.php';

?>