<?php
    session_start();
    if($_SESSION["user"]["admin"] == 0) {
        header('location: ../pocetna/index.php');
    }
    if(array_key_exists("submit", $_POST)) 
    {
        require "../handlers/DataBaseConfig.php";
        $naslov = $_POST["naslov"];
        $sadrzaj = $_POST["sadrzaj"];
        $datum = date("Y-m-d");
        $id_kor = $_SESSION["user"]["id"];
        $br_lajkova = 0;
        $slika = $_FILES["slika"];
        // ubacivanje objave u bazu
        $sql = "INSERT INTO objave (naslov, sadrzaj, slika, datum_kreiranja, id_kor, br_lajkova)" .
               "VALUES ('" . $naslov . "','" . $sadrzaj . "', 'objava','" . $datum . "', ". $id_kor . ", " . $br_lajkova . ")";
        $ok = $conn->query($sql);
        //echo "ok: " . $ok;
        //echo "<br>";
        //echo $sql;
        //echo "<br>";
        //uspresno ubacena u bazu
        if($ok === TRUE)
        {
            $id = $conn->insert_id; // id poslednje objave
            require "../handlers/uploadImage.php";
            $uploaded = uploadImage($slika, "objava" . $id); // uploaduje sliku u folder echo/assets/images/uploads/objava{id} 
            //echo "up: " . $uploaded ? "YES" : "NO" . "<br>";
            if($uploaded["bool"])       // uspesno uploadovana
            {
                //echo '<br>';
                //echo $id;
                //echo "<br>";
                $sql = "UPDATE objave SET slika='objava" . $id . "." . $uploaded["ekstenzija"] . "' WHERE id=" . $id;
                //echo $sql;
                $conn->query($sql);       // promeni joj ume u bazi
                header('location: ./objave.php');
            }   
            else        // neuspesno upoladovana
            {
                $sql = "DELETE FROM objave WHERE id=" . $id;
                $conn->query($sql);         //izbrisi iz baze
                echo "DELETE";
                header('location: ../pocetna/index.php');
            }
        }
        else
        {
            header('location: ../pocetna/index.php');
        } 
    }


?>