<?php
    session_start();

    if (isset($_POST["posRegistraciju"]))
    {

        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $email = $_POST["email"];
        $sifra = $_POST["sifra"];
        $k_ime = $_POST["k_ime"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hzs";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO ucesnici (ime, prezime, email, sifra, k_ime)
            VALUES ('$ime', '$prezime', '$email', '$sifra', '$k_ime')";

        if ($conn->query($sql) === TRUE) 
        {
            $message = "Uspesno ste se registrovali! Ulogovani ste!";
            $sql = "SELECT k_ime, sifra 
            FROM ucesnici";

            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    if($k_ime == $row["k_ime"] && $sifra == $row["sifra"])
                    {
                        $accPostoji = true;
                        $_SESSION["k_ime"] = $k_ime;
                    }
                }
            } 
            else 
            {
                //echo "0 results";
            }
            if(!$accPostoji)
            {
                $message = "Pogresili ste korisnicko ime ili lozinku!";
                require 'login.php';
            }
            else
            {
                require "../pocetna/index.php";
            }
        } 
        else 
        {
            $message = "Korisnicko ime je vec zauzeto!";
            require 'registracija.php';
        }

        $conn->close();

    }

?>