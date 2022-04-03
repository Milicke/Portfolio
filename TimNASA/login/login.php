<?php
    $title = "Prijava";
    require "../header.php";
?>
<head>
    <link rel="stylesheet" href="../assets/css/login.css">
    <script src="./Validacija.js"></script>
</head>

<section>
    <div class="login">
        <form class = "forma" method="post" action="unos.php">
            <h1>Prijava</h1>
            <div id = "formuser" class="unos">
                <img src="../assets/media/user-regular.svg" alt="user-icon">
                <input id = "text-unos" class = "form-unos" type="text" name="k_ime" placeholder = "Korisničko ime">
            </div>
            <div id = "pass" class="unos">
                <img src="../assets/media/key-solid.svg" alt="user-icon">
                <input id = "text-unos" class = "form-unos" type="password" name="sifra" placeholder = "Šifra">
            </div>



            <input class = "submit" type="submit" name="posLogin" value = "Prijavi se">

            <h6>Nemate nalog? <a href="../registracija/registracija.php">Registruj se</a></h6>
        </form>

    </div>
</section>



    <!--
    <form method="post" action="unos.php">
        <input type="text" name="k_ime"><br>
        <input type="password" name="sifra"><br>
        <input type="submit" name="posLogin">
    </form>-->

<?php require '../footer.php'; ?>