<?php
    session_start();

    if(array_key_exists("login", $_POST)) {
        
        require("../handlers/DataBaseConfig.php");

        $k_ime = $_POST["k_ime"];
        $pass = $_POST["pass"];
        $sql = "SELECT * FROM korisnici 
                WHERE korisnicko_ime='" . $k_ime . "' OR email='" . $k_ime . "'";
        $check = $conn->query($sql);
        if($check->num_rows == 0) {
            $_SESSION["upozorenje"] = "Your account is non-existent!";
            header('location: ./login.php');
        }
        else {
            $row = $check->fetch_assoc();
            if($row["sifra"] == $pass) {
                $_SESSION["user"] = $row;
                header('location: ../objave/objave.php');
            }
            else {
                $_SESSION["upozorenje"] = "Wrong code!";
                header('location: ./login.php');
            }
        }

    }
?>