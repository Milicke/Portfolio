<?php
    session_start();
    if($_SESSION["user"]["admin"] == 0) {
        header('location: ../pocetna/index.php');
    }
    require "../handlers/deleteImage.php";
    require "../handlers/DataBaseConfig.php";
    $id = $_SESSION["id"];
    $sql = "SELECT * FROM recepti WHERE id=" . $id;
    $del = $conn->query($sql)->fetch_assoc();
    deleteImage($del["slika"]);
    $sql = "DELETE FROM recepti WHERE id=" . $id;
    $conn->query($sql);
    header('location: ./recepti.php');
?>