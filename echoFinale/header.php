<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
      $(document).ready(function(){
        $('.click').click(function(){
          $('.popup_box').css("display", "block");
        });
        $('.btn1').click(function(){
          $('.popup_box').css("display", "none");
        });
        $('.btn2').click(function(){
          $('.popup_box').css("display", "none");
          alert("Account Permanently Deleted.");
        });
      });

    </script>
  </head>
  <body>
      <!-- NAVBAR -->
  <nav class="navbar navbar-expand-md navbar-dark  sticky-top">
            <a class="navbar-brand ms-5" href="../index.php">Echomap</a>
            <button class="navbar-toggler d-lg-none me-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end me-5" id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Početna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ranglista/ranglista.php">Rang lista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dogadjaji/dogadjaji.php">Događaji</a>
                    </li>
                    <?php
                        if(isset($_SESSION["user"])) {
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link" href="../profil/profil.php">' . $_SESSION["user"]["k_ime"] .'</a>';
                            echo '</li>';
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link" href="../handlers/odjava.php">Odjava</a>';
                            echo '</li>';
                        }
                        else {
                            echo '<li class="nav-item">
                            <a class="nav-link" href="../login/login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../registracija/registracija.php">Register</a>
                            </li>';
                        }

                    
                    ?>
                </ul>
            </div>
        </nav>
        <!-- X NAVBAR X -->