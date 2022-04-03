<?php
    session_start();
    include "../handlers/DataBaseConfig.php";
    include "../handlers/RandomString.php";
    $naziv = $_POST["naziv"];
    $opis = $_POST["opis"];
    $temp = $_POST["datum"];
    $datum = str_replace('T',' ',$temp);
    $user = $_SESSION["user"]["id"];
    $slika = $_FILES["slika"];
    $adresa = $_POST["adresa"];
    $grad = $_POST["grad"];
    $lat = $_POST["lat"];
    $lng = $_POST["lng"];
    $kategorija = $_POST["kategorija"];
    //echo $kategorija;
    //$geoAdresa = "$adresa, $grad, Srbija";
    //$geoAdresa = str_replace(" ", "+", $geoAdresa);
    //include "../handlers/geoLocation.php";

    //$kord = getGeoCode($geoAdresa);

    $sql = "INSERT INTO dogadjaji (naziv,opis,datum,id_k,slika, adresa, grad, lat, lng, kategorija_id) 
            VALUES('$naziv','$opis','$datum',$user,'dogadjaj', '$adresa', '$grad', '$lat', '$lng', $kategorija);";

    if($conn->query($sql) === TRUE) {
        $id = $conn->insert_id; // id poslednje objave
            require "../handlers/uploadImage.php";
            $uploaded = uploadImage($slika, "dogadjaj" . $id); // uploaduje sliku u folder echo/assets/images/uploads/objava{id} 
            //echo "up: " . $uploaded ? "YES" : "NO" . "<br>";
            if($uploaded["bool"])       // uspesno uploadovana
            {
                //echo '<br>';
                //echo $id;
                //echo "<br>";
                $sql = "UPDATE dogadjaji SET slika='dogadjaj" . $id . "." . $uploaded["ekstenzija"] . "' WHERE id=" . $id;
                //echo $sql;
                $conn->query($sql);       // promeni joj ume u bazi
                $kod = generateRandomString(5);
                $sql = "INSERT INTO kodovi (naziv,vrednost,id_dogadjaja) 
                VALUES('$kod','$nagrada',$id)";
                $conn->query($sql);
                header('location: ./dogadjaji.php');
            }   
            else        // neuspesno upoladovana
            {
                $sql = "DELETE FROM dogadjaji WHERE id=" . $id;
                $conn->query($sql);         //izbrisi iz baze
                //echo "DELETE";
                header('location: ../pocetna/index.php');
            }
    }
    else {
        echo $sql;
    }
?>