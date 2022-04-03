<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hzs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $naziv = $_POST["naziv"];
    $organizator = $_POST["organizator"];
    $sport = $_POST["sport"];
    $mesto = $_POST["mesto"];
    $datum = $_POST["datum"];
    $vreme = $_POST["vreme"];
    $post_image = $_POST["post_image"];

    $sql = "INSERT INTO dogadjaji (naziv, organizator, sport, mesto, datum, vreme, slika)
        VALUES ('$naziv', '$organizator','$sport', '$mesto', '$datum', '$vreme', '$post_image')";

    if ($conn->query($sql) === TRUE) 
    {
        //echo "Uspesno ste kreirali dogadjaj";
        $conn->close();
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
    }

?>