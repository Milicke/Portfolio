<?php 
    $title = "Registracija";
    require "../header.php"; 
?>
<head>
    <link rel="stylesheet" href="../assets/css/login.css">
    <script src="./Validacija.js"></script>
</head>

    <section>
        <div class="login">
            <form class = "forma" method="post" action="unos.php" onsubmit = "return Validacija()">
                <h1>Registracija</h1>
                <p class="upozorenje" style = "color:red" id = "alert">Poruka upozorenja</p>
                <div class="imeprezime">
                    <div class="unos">
                        <img src="../assets/media/user-regular.svg" alt="user-icon">
                        <input id = "ime" class = "form-unos" type="text" name="ime" placeholder = "Ime">
                    </div>

                    <div class="unos">
                        <img src="../assets/media/user-regular.svg" alt="user-icon">
                        <input id = "prezime" class = "form-unos" type="text" name="prezime" placeholder = "Prezime">
                    </div>
                </div>
                <div class="unos">
                    <img src="../assets/media/at-solid.svg" alt="mail-icon">
                    <input id = "mail" class = "form-unos" type="email" name="email" placeholder = "E-mail">
                </div>

                <div class="unos">
                    <img src="../assets/media/user-regular.svg" alt="user-icon">
                    <input id="korime" class = "form-unos" type="text" name="k_ime" placeholder = "Korisničko ime">
                </div>

                <div class="unos">
                    <img src="../assets/media/key-solid.svg" alt="user-icon">
                    <input id = "sifra" class = "form-unos" type="password" name="sifra" placeholder = "Šifra">
                </div>



                <input class = "submit" type="submit" name="posRegistraciju" value = "Registruj se">
            </form>

        </div>
    </section>





   <!-- <form method="post" action="unos.php">

        <input type="text" name="ime"><br>
        <input type="text" name="prezime"><br>
        <input type="email" name="email"><br>
        <input type="text" name="k_ime"><br>
        <input type="password" name="sifra"><br>
        <input type="submit" name="posRegistraciju">

    </form>
    -->

<?php require '../footer.php'; ?>