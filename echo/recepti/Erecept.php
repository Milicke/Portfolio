<?php
    session_start();
    $title = "Change recipe";
    require "../header.php";
    if($_SESSION["user"]["admin"] == 0) {
        header('location: ../pocetna/index.php');
    }
	require "../handlers/DataBaseConfig.php";
	$id = $_SESSION["id"];
//	unset($_SESSION["id"]);
	$sql = "SELECT * FROM recepti WHERE id=" . $id;
	$rezultat = $conn->query($sql);
	$recept = $rezultat->fetch_assoc();
?>
    <form name="EForm" action="./edit.php" onsubmit="return Validacija(false)" method="post" class="forma"  enctype="multipart/form-data">
        <div class="form-box">
            <h2 class = "Lnaslov">Change</h2>
			<p style = "color:white;" id="upozorenje"></p>
            <input type="text" style="display: none;" name="id" value="<?php echo $id?>">
            <div class="input-container">
                <input class="input-field" type="text" placeholder="Name of recipe" 
					name="naziv" value="<?php echo $recept["naziv"]?>">
            </div>

            <div class="input-container">
                <input class="upload-box" type="file" placeholder="Photo" 
					name="slika">
            </div>
            
            <textarea id="subject" name="priprema" cols="34" rows="8" placeholder="Preparation"><?php echo $recept["priprema"]?></textarea>
            <textarea id="subject" name="sastojci" cols="34" rows="4" placeholder="Ingredients"><?php echo $recept["sastojci"]?></textarea>
            <button type="submit" class="dugme" name="submit">SACUVAJ IZMENE</button>
        </div>

 
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <?php
        require "../footer.php";
    ?>