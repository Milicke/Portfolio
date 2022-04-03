<?php
    session_start();
    $title = "Register";
    require "../header.php";
?>
      <div class="formPage">
            <div class="formContainer">
                <img src="../assets/images/formaImg.jpg" alt="">
                <div class="formCnt">
                    <h4>Register</h4>
                    <p style = "color:red;" id="upozorenjejs"></p>
                    <?php
                        if(isset($_SESSION["upozorenje1"])) {
                            echo '<p style = "color:red;" id="upozorenjephp">' . $_SESSION["upozorenje1"] . "</p>";
                            unset($_SESSION["upozorenje1"]);
                        }
                    ?>
                    <form action="./registracijaback.php" onsubmit="return Validacija()" method="post">
                        <input type="text" name="ime" id="ime" placeholder="Ime"><br>
                        <input type="text" name="prezime" id="prezime" placeholder="Prezime"><br>
                        <input type="text" name="mail" id="mail" placeholder="E-mail"><br>
                        <input type="text" name="k_ime" id="k_ime" placeholder="Korisnicko ime"><br>
                        <input type="password" name="pass" id="pass" placeholder="Lozinka"><br>
                        <input type="submit" name="check1" value="Registruj se">
                    </form>
                </div>
            </div>
        </div>
      <?php
            require "../footer.php";
        ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="./register.js"></script>
  </body>
</html>