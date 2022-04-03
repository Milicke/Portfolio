<?php
    session_start();
    if($_SESSION["user"]["admin"] == 0) {
        header('location: ../pocetna/index.php');
    }
    if(array_key_exists("submit", $_POST)) 
    {
        require "../handlers/DataBaseConfig.php";
        $naziv = $_POST["naziv"];
        $priprema = $_POST["priprema"];
        $sastojci = $_POST["sastojci"];
        $id_kor = $_SESSION["user"]["id"];
        $slika = $_FILES["slika"];
        // ubacivanje objave u bazu
        $sql = "INSERT INTO recepti (naziv, priprema, sastojci, id_kor, slika) " .
               "VALUES ('" . $naziv . "','" . $priprema . "','" . $sastojci . "'," . $id_kor . ", 'recept');";
        $ok = $conn->query($sql);
        //echo "ok: " . $ok;
        //echo "<br>";
        echo $sql;
        //echo "<br>";
        //uspresno ubacena u bazu
        if($ok === TRUE)
        {
            echo "okej!";
            $id = $conn->insert_id; // id poslednje objave
            require "../handlers/uploadImage.php";
            $uploaded = uploadImage($slika, "recept" . $id); // uploaduje sliku u folder echo/assets/images/uploads/objava{id} 
            //echo "up: " . $uploaded ? "YES" : "NO" . "<br>";
            if($uploaded["bool"])       // uspesno uploadovana
            {
                //echo '<br>';
                //echo $id;
                //echo "<br>";
                $sql = "UPDATE recepti SET slika='recept" . $id . "." . $uploaded["ekstenzija"] . "' WHERE id=" . $id;
                //echo $sql;
                $conn->query($sql);       // promeni joj ume u bazi
                header('location: ./recepti.php');
            }   
            else        // neuspesno upoladovana
            {
                $sql = "DELETE FROM recepti WHERE id=" . $id;
                $conn->query($sql);         //izbrisi iz baze
                echo "DELETE";
                header('location: ../pocetna/index.php');
            }
        }
        else
        {
            echo "nije okej";
            //header('location: ../pocetna/index.php');
        } 
    }


?>