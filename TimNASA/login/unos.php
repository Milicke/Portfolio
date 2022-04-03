<?php

    session_start();

    if (isset($_POST["posLogin"]))
    {

        $k_ime = $_POST["k_ime"];
        $sifra = $_POST["sifra"];

        $accPostoji = false;

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hzs";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }

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
        if(!$accPostoji)
        {
            $message = "Pogresili ste korisnicko ime ili lozinku!";
            require 'login.php';
        }
        else
        {
            $message = "Uspesno ste se ulogovali!";
            require "../pocetna/index.php";
        }

        $conn->close();

    }

?>