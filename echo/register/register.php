<?php
    session_start();
    if(isset($_SESSION["user"]))header('location: ../pocetna/index.php');
    $title = "Register";
    require "../header.php";
?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="./register.js"></script>
    <form  action="./Uregister.php" onsubmit="return Validacija()" method="post" class = "forma" enctype="multipart/form-data">
        <div class="form-box">
            <h2 class = "Lnaslov">Register</h2>
            <p style = "color:white;" id="upozorenjejs"></p>
            <?php
                if(isset($_SESSION["upozorenje1"])) {
                    echo '<p style = "color:white;" id="upozorenjephp">' . $_SESSION["upozorenje1"] . "</p>";
                    unset($_SESSION["upozorenje1"]);
                }
            ?>
            <div class = "imeprezime">
                <div class="input-container">
                    <i class='fa fa-user-circle icon'></i>
                    <input class="input-field" type="text" placeholder="First name" name="ime">
                </div>
                <div class="input-container">
                    <i class='fa fa-user-circle icon'></i>
                    <input class="input-field" type="text" placeholder="Last name" name="prezime">
                </div>
            </div>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username" name="k_ime">
            </div>
            <div class="input-container">
                <i class="far fa-envelope icon"></i>
                <input class="input-field" type="text" placeholder="E-mail" name="mail">
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="pass">
            </div>
            <!-- <textarea id="subject" name="subject" placeholder="Napisi nešto.." ></textarea> -->
            <button type="submit" class="dugme" name="register">Register</button>
        </div>

 
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<?php
    require "../footer.php";
?>