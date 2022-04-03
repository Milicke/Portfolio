<?php 

    if(!isset($_SESSION)) 
        session_start(); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../assets/css/pocetna.css">
    <title><?php echo $title; ?></title>
</head>

<body>
    <header>
        <div class="row header no-gutters">
            <nav class="navbar navbar-expand-lg navbar-light col-md-12">
                <button class="navbar-toggler borderBlue dMargina" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse m-auto" id="navbarTogglerDemo01">
                    <ul class="navbar-nav">
                        <li class="nav-item m-auto">
                            <a class="nav-link" href="../pocetna/index.php">Početna</a>
                        </li>

                        <li class="nav-item m-auto">
                            <a class="nav-link" href="../QnA/qna.php">Q&A</a>
                        </li>

                        <li class="nav-item m-auto">
                            <a class="nav-link" href="../organizujDogadjaj/novDogadjaj.php">Nov događaj</a>
                        </li>

                        <li class="nav-item m-auto">
                            <a class="nav-link" href="../organizujDogadjaj/sviDogadjaji.php">Svi događaji</a>
                        </li>
                    </ul>

                  <form class="form-inline my-2 my-md-0">
                      <div class="d-flex m-auto">
                        <div class="nav-item prijave">
                            <?php
                            
                                if(isset($_SESSION["k_ime"]))
                                    echo '<a class="nav-link" href="#">' . $_SESSION["k_ime"] . '</a>';
                                else
                                    echo '<a class="nav-link" href="../login/login.php">Prijavi se</a>';
                            
                            ?>
                        </div>

                        <div class="nav-item prijave">
                            <?php

                                if(isset($_SESSION["k_ime"]))
                                    echo '<a class="nav-link" href="../handler/odjava.php">Odjavite se</a>';
                                else
                                    echo '<a class="nav-link" href="../registracija/registracija.php">Registracija</a>';

                            ?>
                        </div>
                    </div>
                  </form>
                </div>
              </nav>
        </div>

    </header>
    <body>
