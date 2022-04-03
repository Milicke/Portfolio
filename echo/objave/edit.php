<?php
    session_start();
    if($_SESSION["user"]["admin"] == 0) {
        header('location: ../pocetna/index.php');
    }
    if(array_key_exists("submit", $_POST)) 
    {
        require "../handlers/DataBaseConfig.php";
		$id = $_POST["id"];
        $naslov = $_POST["naslov"];
        $sadrzaj = $_POST["sadrzaj"];
        $slika = $_FILES["slika"];

        $sql = "UPDATE objave SET naslov='" . $naslov . "' WHERE id=" . $id;
		$conn->query($sql);
		$sql = "UPDATE objave SET sadrzaj='" . $sadrzaj . "' WHERE id=" . $id;
		$conn->query($sql);
		
        if(!$slika["error"])
        {
            require "../handlers/uploadImage.php";
			require "../handlers/deleteImage.php";
			$sql = "SELECT slika FROM objave WHERE id=" . $id;
			$image_name = $conn->query($sql)->fetch_assoc()["slika"];
			$deleted = deleteImage($image_name);
            $uploaded = uploadImage($slika, "objava" . $id); // uploaduje sliku u folder echo/assets/images/uploads/objava{id} 
            $sql = "UPDATE objave SET slika='objava" . $id . "." . $uploaded["ekstenzija"] . "' WHERE id=" . $id;
		    $conn->query($sql);
            //echo "up: " . $uploaded ? "YES" : "NO" . "<br>";
            
        }
		header('location: ./objave.php');
    }


?>