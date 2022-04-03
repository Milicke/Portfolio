<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hzs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST["id"];
    $mesto = $_POST["mesto"];
    $vreme = $_POST["vreme"];

    $sql = "UPDATE dogadjaji SET vreme = '$vreme', mesto = '$mesto' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) 
    {

    } 
    else 
    {
        
    }

?>
