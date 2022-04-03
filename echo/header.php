<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/scss/style.css" type="text/css">
    <title><?php echo $title; ?></title>
</head>
<body>
<header>
        <nav class="navbar fixed-top navbar-expand-sm">
            <a class="navbar-brand ms-5" href="../pocetna/index.php">be fit</a>
            <button class="navbar-toggler data-bg-dark" type="button" onclick="changeBtn(this)" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
		  	<div class="navCont">
  				<div class="bar1"></div>
  				<div class="bar2"></div>
  				<div class="bar3"></div>
			</div>
		</button>
            <div class="collapse me-10 navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto me-5 mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../pocetna/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../objave/objave.php">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../recepti/recepti.php">Recipes</a>
                    </li>
                    <?php
                        if(isset($_SESSION["user"])) {
                            echo  '<li class="nav-item">';
                            echo '<a class="nav-link" href = "#">' . $_SESSION["user"]["korisnicko_ime"] . '</a>';
                            echo '</li>';
                            echo  '<li class="nav-item">';
                            echo '<a class="nav-link" href = "../handlers/odjava.php">Sign out</a>';
                            echo '</li>';
                        }
                        else {
                            echo  '<li class="nav-item">';
                            echo '<a class="nav-link" href="../login/login.php">Login</a>';
                            echo '</li>';
                            echo  '<li class="nav-item">';
                            echo '<a class="nav-link" href="../register/register.php">Register</a>';
                            echo '</li>';
                        }
                    ?>
                </ul>
            </div>
        </nav>
    </header>