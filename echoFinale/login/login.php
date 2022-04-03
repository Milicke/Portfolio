<?php
    session_start();
    $title = "Login";
    require "../header.php";
?>
        
        <div class="formPage">
            <div style = "height:60vh" class="formContainer">
                <img src="../assets/images/formaImg.jpg" alt="">
                <div class="formCnt">
                    <h4>Log in</h4>
                    <?php if(isset($_SESSION["upozorenje"]))echo $_SESSION["upozorenje"]; unset($_SESSION["upozorenje"]);?>
                    <form action="./loginback.php" method="post">
                        <input type="text" name="ime" id="ime" placeholder="Korisničko ime"><br>
                        <input type="password" name="pass" id="pass" placeholder="Lozinka"><br>
                        <input type="submit" name="check" value="Prijavi se">
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


        <?php
            require "../footer.php";
        ?>