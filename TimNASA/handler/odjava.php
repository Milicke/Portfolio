<?php

    session_start();
    $_SESSION["k_ime"] = NULL;

?>

<?php 

    $message = "Uspesno ste se izlogovali!";
    require '../pocetna/index.php'; 

?>