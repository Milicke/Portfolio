<?php
    session_start();
    include "../handlers/DataBaseConfig.php";

    $ime = $_POST["ime"];
    $pass = $_POST["pass"];

    if(array_key_exists("check", $_POST)) {
        $sql = "SELECT * FROM korisnici WHERE k_ime='" . $ime . "' OR mail='" . $ime . "'";
        $check = $conn->query($sql);
        if($check->num_rows > 0) {
            $row = $check->fetch_assoc();
            if($row["sifra"] == $pass) {
                $_SESSION["user"] = $row;
                header('location: ../index.php');
            }
            else {
                $_SESSION["upozorenje"] = "Pogrešna šifra!";
                header('location: ./login.php');
            }
        }
        else {
            $_SESSION["upozorenje"] = "Vaš nalog ne postoji!";
            header('location: ./login.php');
        }
    }


?>