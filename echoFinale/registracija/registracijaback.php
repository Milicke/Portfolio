<?php
    session_start();
    if(array_key_exists("check1", $_POST)) {
        
        require("../handlers/DataBaseConfig.php");
        
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $k_ime = $_POST["k_ime"];
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];

        $sql = "SELECT * FROM korisnici WHERE k_ime = '$k_ime' OR mail='$mail'";
        $check = $conn->query($sql);
                
        if($check->num_rows > 0) {
            $_SESSION["upozorenje1"] = "Korisničko ime je zauzeto!";
            header('location: ./registracija.php');
        }
        else {
            $sql = "INSERT INTO korisnici (ime,prezime,mail,k_ime,sifra,balance,admin) 
            VALUES('$ime','$prezime','$mail','$k_ime','$pass',0,0)";
            if($conn->query($sql) === TRUE) {
                $_SESSION["upozorenje"] = "Uspešno ste se registrovali!";
                header('location: ../login/login.php');
            }
            else {
                $_SESSION["upozorenje1"] = "Neuspešno";
                header('location: ./registracija.php');
            }
        }
    }


?>