<?php
    session_start();
    $title = "Kreiraj dogadjaj";
    require "../header.php";
?>
<div class="formPage">
            <div class="formContainer">
                <img src="../assets/images/formaImg.jpg" alt="">
                <div class="formCnt">
                    <h4>Kreiraj dogadjaj</h4>
                    <p style = "color:red;" id="upozorenjejs"></p>
                    <?php
                        if(isset($_SESSION["upozorenje1"])) {
                            echo '<p style = "color:red;" id="upozorenjephp">' . $_SESSION["upozorenje1"] . "</p>";
                            unset($_SESSION["upozorenje1"]);
                        }
                    ?>
                    <form action="./kdogadjajback.php" method="post" enctype="multipart/form-data">
                        <div class="red1">
                        <input type="text" name="naziv" id="naziv" placeholder="Naziv"><br>
                        <input type="datetime-local" name="datum" id="datum" placeholder="Datum"><br>
                        </div>
                        
                        <input type="text" name="opis" id="opis" placeholder="Opis"><br>
                        
                        <input type="file" name="slika" id="slika" placeholder="Slika"><br>
                        <div class="red1">
                        <input type="text" name="adresa" id="adresa" placeholder="Adresa"><br>
                        <input type="text" name="grad" id="grad" placeholder="Grad" value="Kraljevo"><br>

                        </div>
                        <div class="red1"><input type="text" name="lat" id="lat" placeholder="Latitude"><br>
                        <input type="text" name="lng" id="lng" placeholder="longitude"><br>
                    </div>
                        <select name="kategorija" id="kategorija">
                            <option value="1">sport</option>
                            <option value="2">umetnost</option>
                            <option value="3">knjizevnost</option>
                            <option value="4">kultura</option>
                        </select><br>
                        <input type="submit" value="Kreiraj">
                    </form>
                </div>
            </div>
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

      <?php
            require "../footer.php";
        ?>