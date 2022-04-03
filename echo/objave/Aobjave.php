<?php
    session_start();
    $title = "Create post";
    require "../header.php";
    if($_SESSION["user"]["admin"] == 0) {
        header('location: ../pocetna/index.php');
    }
?>
    <form name="KForm" action="./Kobjavu.php" onsubmit="return Validacija(true)" method="post" class="forma"  enctype="multipart/form-data">
        <div class="form-box">
            <h2 class = "Lnaslov">Create</h2>
            <p style = "color:white;" id="upozorenje"></p>
            <div class="input-container">
                <input class="input-field" type="text" placeholder="Name of post" name="naslov">
            </div>

            <div class="input-container">
                <input class="upload-box" type="file" placeholder="Photo of post" name="slika">
            </div>
            
            <textarea id="subject" name="sadrzaj" cols="34" rows="8" placeholder="Content" ></textarea>
            <button type="submit" class="dugme" name="submit">Create a post</button>
        </div>

 
    </form>
    <script src="./validacija.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <?php
        require "../footer.php";
    ?>