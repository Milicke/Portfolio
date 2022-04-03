<?php
    session_start();
    if(array_key_exists("register", $_POST)) {
        
        require("../handlers/DataBaseConfig.php");
        
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $k_ime = $_POST["k_ime"];
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];

        $sql = "SELECT * FROM korisnici WHERE korisnicko_ime = '$k_ime' OR email='$mail'";
        $check = $conn->query($sql);
                
        if($check->num_rows > 0) {
            $_SESSION["upozorenje1"] = "Username or email is already taken!";
            header('location: ./register.php');
        }
        else {
            $sql = "INSERT INTO korisnici (ime,prezime,korisnicko_ime,sifra,email,admin) 
            VALUES('$ime','$prezime','$k_ime','$pass','$mail',0)";
            if($conn->query($sql) === TRUE) {
                $_SESSION["upozorenje2"] = "You have successfully registered";
                header('location: ../login/login.php');
            }
            else {
                $_SESSION["upozorenje1"] = "Unsuccessful";
                header('location: ../register/register.php');
            }
        }
    }



?>