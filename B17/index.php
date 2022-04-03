<?php
  //session_start();
  class Proizvod 
  {
      public $sifra;
      public $naziv;
      public $proizvodjac;
      public $RAM;
      public $procesor;
      public $kamera;
      public $ekran;
      public $slika;
      public $cena;
  }
  $i = 0;
  $file = fopen("vebprodavnica.txt","r");
  while(!feof($file)) {
    $podaci[$i] = new Proizvod();
    $line = fgets($file);
    $podaci[$i]->sifra = substr($line,0,6);
    $podaci[$i]->naziv = substr($line,6,25);
    $podaci[$i]->proizvodjac = substr($line,31,20);
    $podaci[$i]->RAM = substr($line,51,5);
    $podaci[$i]->procesor = substr($line,56,15);
    $podaci[$i]->kamera = substr($line,71,10);
    $podaci[$i]->ekran = substr($line,81,5);
    $podaci[$i]->slika = substr($line,91,30);
    $podaci[$i]->cena = substr($line,121,10);
    $i++;
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
  </head>
  <body>
    <header>
        <p>Zadatak 8</p>
        <p>Veb prodavnica</p>
    </header>
    <h1>Web prodavnica</h1>
    <hr>
    <section class = "container">
      <form action="./index.php" method="post">
        <!-- Proizvodjaci -->
        <div>
        <label for="proizvodjac">Proizvodjac:</label>
        <select name="proizvodjac" id="proizvodjac">
          <?php
            $c = 0;
            $test = array();
            for($k = 0; $k < $i; ++$k) {
              if($test == array()) {
                $test[$c++] = $podaci[$k]->proizvodjac;
                echo '<option value="' . $podaci[$k]->proizvodjac . '">' . $podaci[$k]->proizvodjac .'</option>';
              }
              else {
                $provera = true;
                for($x = 0; $x < $c; ++$x) {
                  if($podaci[$k]->proizvodjac == $test[$x]) {
                    $provera = false;
                    break;
                  }
                }
                if($provera)echo '<option value="' . $podaci[$k]->proizvodjac . '">' . $podaci[$k]->proizvodjac .'</option>';
              }
            }
          ?>
        </select><br>
        <!-- RAM memorija -->
        <label for="RAM">RAM memorija:</label>
        <select name="RAM" id="RAM">
          <option value="512MB">512MB</option>
          <option value="1GB  ">1GB</option>
          <option value="1.5GB">1.5GB</option>
          <option value="2GB  ">2GB</option>
          <option value="3GB  ">3GB</option>
        </select><br>

        </div>
        <!-- Procesor -->
        <div>
        <label for="procesor">Tip procesora:</label>
        <select name="procesor" id="procesor">
          <?php
            $c = 0;
            $test = array();
            for($k = 0; $k < $i; ++$k) {
              if($test == array()) {
                $test[$c++] = $podaci[$k]->procesor;
                echo '<option value="' . $podaci[$k]->procesor . '">' . $podaci[$k]->procesor .'</option>';
              }
              else {
                $provera = true;
                for($x = 0; $x < $c; ++$x) {
                  if($podaci[$k]->procesor == $test[$x]) {
                    $provera = false;
                    break;
                  }
                }
                if($provera)echo '<option value="' . $podaci[$k]->procesor . '">' . $podaci[$k]->procesor .'</option>';
              }
            }
          ?>
        </select><br>

        <!-- Kamera -->
        <label for="kamera">Kamera:</label>
        <select name="kamera" id="kamera">
          <?php
            $c = 0;
            $test = array();
            for($k = 0; $k < $i; ++$k) {
              if($test == array()) {
                $test[$c++] = $podaci[$k]->kamera;
                echo '<option value="' . $podaci[$k]->kamera . '">' . $podaci[$k]->kamera .'</option>';
              }
              else {
                $provera = true;
                for($x = 0; $x < $c; ++$x) {
                  if($podaci[$k]->kamera == $test[$x]) {
                    $provera = false;
                    break;
                  }
                }
                if($provera)echo '<option value="' . $podaci[$k]->kamera . '">' . $podaci[$k]->kamera .'</option>';
              }
            }
          ?>
        </select><br>
        </div>
        <!-- Ekran -->
        <div>
        <label for="ekran">Ekran:</label>
        <select name="ekran" id="ekran">
          <?php
            $c = 0;
            $test = array();
            for($k = 0; $k < $i; ++$k) {
              if($test == array()) {
                $test[$c++] = $podaci[$k]->ekran;
                echo '<option value="' . $podaci[$k]->ekran . '">' . $podaci[$k]->ekran .'</option>';
              }
              else {
                $provera = true;
                for($x = 0; $x < $c; ++$x) {
                  if($podaci[$k]->ekran == $test[$x]) {
                    $provera = false;
                    break;
                  }
                }
                if($provera)echo '<option value="' . $podaci[$k]->ekran . '">' . $podaci[$k]->ekran .'</option>';
              }
            }
          ?>
        </select><br>
        </div>
        <input name="check" class = "dugme" type="submit" value="Trazi">
      </form>
    </section>
    <hr>
    
    <?php
      if(array_key_exists("check", $_POST)) {
        $proizvodjac = $_POST["proizvodjac"];
        $RAM = $_POST["RAM"];
        $procesor = $_POST["procesor"];
        $kamera = $_POST["kamera"];
        $ekran = $_POST["ekran"];
        echo '<table class="table">
        <thead><tr><th scope="col"></th><th scope="col">Karakteristike</th><th scope="col">Cena</th></tr></thead> 
        <tbody>';
        for($k = 0; $k < $i; ++$k) {
          if(($podaci[$k]->proizvodjac == $proizvodjac) && ($podaci[$k]->RAM == $RAM) && ($podaci[$k]->procesor == $procesor) && ($podaci[$k]->kamera == $kamera) && ($podaci[$k]->ekran == $ekran))
          {
            echo '<tr><td scope="row"><img src="' . $podaci[$k]->slika . '"></td> <td> Proizvodjac: ' . $podaci[$k]->proizvodjac . '<br> RAM: ' . $podaci[$k]->RAM .  ' <br> Procesor: ' . $podaci[$k]->procesor . ' <br> Ekran: ' . $podaci[$k]->ekran . ' <br> Kamera: ' . $podaci[$k]->kamera . '</td> <td>' . $podaci[$k]->cena . '</td></tr>';
          }
        }



        echo '</tbody>
        </table>';
      }
    ?>
    <footer>
      <p> Elektrotehnicka Skola "Nikola Tesla" Nis </p>
      <a href="./index.php">Pocetna</a>
      <a href="./k_upustvo.php">Uputstvo</a>
      <a href="./oAutoru.php">O Autoru</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>