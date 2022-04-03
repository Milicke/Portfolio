<?php
    session_start();
    if(isset($_SESSION["user"]))header('location: ../pocetna/index.php');
    $title = "Login";
    require "../header.php";
?>
    
    <form name="loginForm" action="./Ulogin.php" method="post" class = "forma">
        <div class="form-box">
            <h2 class = "Lnaslov">Log in</h2>
            <?php
                if(isset($_SESSION["upozorenje"])) {
                    echo '<p style = "color:white;font-weight:bold">' . $_SESSION["upozorenje"] . "</p>";
                    unset($_SESSION["upozorenje"]);
                }
                else if(isset($_SESSION["upozorenje2"])) {
                    echo '<p style = "color:green">' . $_SESSION["upozorenje2"] . "</p>";
                    unset($_SESSION["upozorenje2"]);
                }
            ?>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username or email" name="k_ime">
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="pass">
            </div>
            <!-- <textarea id="subject" name="subject" placeholder="Napisi nešto.." ></textarea> -->
            <button type="submit" class="dugme" name="login">Log in</button>
        </div>

 
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php
    require "../footer.php";
?>