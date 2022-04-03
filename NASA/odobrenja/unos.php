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
    $sql = "INSERT INTO prijavljivanja (id_takmicenja, id_korisnika) VALUES ($id_takmicenja, $id_korisnika)";
    
    if ($conn->query($sql) === TRUE) 
    {
        $sql = "DELETE FROM cekanja WHERE id_korisnika = $id_korisnika AND id_takmicenja = $id_takmicenja";
        if ($conn->query($sql) === TRUE) 
        {
            require '../takmicenja/takmicenja.php';
        }
    }

?>