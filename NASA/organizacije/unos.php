<?php 
    $id_takmicenja = $_GET["id_takmicenja"];
    $id_korisnika = $_GET["id_korisnika"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "NASA";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO cekanja (id_takmicenja, id_korisnika) VALUES ($id_takmicenja, $id_korisnika)";
    
    if ($conn->query($sql) === TRUE) 
    {
        $message = "Uspešno ste poslali zahtev! Sačekajte da Vas admin odobri!";
        require '../takmicenja/takmicenja.php';
    }

?>