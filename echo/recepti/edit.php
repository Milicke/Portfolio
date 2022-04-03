<?php
    session_start();
    if($_SESSION["user"]["admin"] == 0) {
        header('location: ../pocetna/index.php');
    }
    if(array_key_exists("submit", $_POST)) 
    {
        require "../handlers/DataBaseConfig.php";
		$id = $_POST["id"];
        $naziv = $_POST["naziv"];
        $priprema = $_POST["priprema"];
        $sastojci = $_POST["sastojci"];
        $slika = $_FILES["slika"];

        $sql = "UPDATE recepti SET naziv='" . $naziv . "' WHERE id=" . $id;
		$conn->query($sql);
		$sql = "UPDATE recepti SET priprema='" . $priprema . "' WHERE id=" . $id;
		$conn->query($sql);
        $sql = "UPDATE recepti SET sastojci='" . $sastojci . "' WHERE id=" . $id;
		$conn->query($sql);
		
        if(!$slika["error"])
        {
            require "../handlers/uploadImage.php";
			require "../handlers/deleteImage.php";
			$sql = "SELECT slika FROM recepti WHERE id=" . $id;
			$image_name = $conn->query($sql)->fetch_assoc()["slika"];
			$deleted = deleteImage($image_name);
            $uploaded = uploadImage($slika, "recept" . $id); // uploaduje sliku u folder echo/assets/images/uploads/objava{id} 
            $sql = "UPDATE recepti SET slika='recept" . $id . "." . $uploaded["ekstenzija"] . "' WHERE id=" . $id;
		    $conn->query($sql);
            //echo "up: " . $uploaded ? "YES" : "NO" . "<br>";
            
        }
		header('location: ./recepti.php');
    }


?>