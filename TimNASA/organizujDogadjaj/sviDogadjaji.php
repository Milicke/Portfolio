<?php 

  $title = "Svi događaji";
  require "../header.php"; 

?>

<head>
<link rel="stylesheet" href="../assets/css/sviDogadjaji.css">
<script src="izmene.js"></script>
</head>

<div class="pozadina">
  <?php

    $json_url = "http://localhost/HZS/TimNasa/api/dogadjaji.php";
    $json = file_get_contents($json_url);
    $data = json_decode($json);

    if(isset($_SESSION["k_ime"]))
      $k_ime = $_SESSION["k_ime"];
    else
      $k_ime = NULL;

    $i = 0;
    if(!empty($data))
    {

    
    foreach($data as $podatak)
    {
      if($i%3==0)
        echo "<div class=\"row no-gutters\">";

        //selektuj timove
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hzs";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $id_dogadjaja = $podatak->id;
        $sql = "SELECT * FROM timovi WHERE id_dogadjaja = $id_dogadjaja";
        $result = $conn->query($sql);

        $br_timova = 0;
        if(mysqli_num_rows($result) > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $br_timova++;
            }
        }

        //

      echo "<div class=\"col-xl-4\">";
      echo '<div class="card" style="width:400px">';
      echo "<img class='card-img-top' src='images/$podatak->slika' alt='Card image' style='width:100%; min-height: 250px'>";
      echo "<div class='card-body'>";
      echo "<div class='d-flex pocetak'>";
      echo "<h4>$podatak->naziv</h4><p class='card-text'>$podatak->datum</p>";
      echo "</div>";
      echo "<p class='text-light'>Organizator: $podatak->organizator</p>";
      echo "<h4 class='text-light card-title'>Sport: $podatak->sport</h4>";
      echo "<h4 class='text-light card-title'>Broj timova: $br_timova</h4>";
      echo "<form class='d-flex justify-content-center flex-column' onsubmit = 'return Validacijaizmene($podatak->id)' action='updejtCall.php?q=$podatak->id' method='post'>";
      echo "<label>Mesto:</label><input disabled value=\"$podatak->mesto\" class='card-text' id='mesto" . "$podatak->id' name='mesto'>";
      echo "<label>Vreme:</label><input disabled value=\"$podatak->vreme\" class='card-text' id='vreme" . "$podatak->id' name='vreme'>";
      echo "<p class = 'upozorenje' id = 'upozorenje"."$podatak->id'>Greska</p>";
      echo "<div class='btnC'>";
      echo "<a href='../dodaj_tim/dodaj_tim.php?id=$podatak->id' class='btn btn-primary btnF' id='prijavi" . "$podatak->id'>Prijavi se</a>";
      if($podatak->organizator == $k_ime)
      {
        echo "<button type='button' class='btn btn-primary btnF' onclick='Izmeni($podatak->id)' id='izmeni"."$podatak->id'>Izmeni</button>";
        echo "<button name='izbrisi' type='submit' class='btn btn-primary btnF' id='izbrisi" . "$podatak->id'>Izbrisi</button>";
      }
      echo "<input name='sacuvaj' type='submit' id='sacuvaj" . "$podatak->id' value='Sačuvaj izmene' style='display:none;'>";
      echo "</div>";
      echo "</form>";
      echo "</div>";
      echo "</div><br>";
      echo "</div>";
      
      if(($i-2)%3==0)
       echo "</div>";
      $i++;
    }
    if(($i-3)%3!=0 || ($i-1)%3!=0)
      echo "</div>";
  }
  else {
    echo "<h1>Nema događaja u blizini!</h1>";
  }

    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hzs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM dogadjaji";
    $result = $conn->query($sql);

    if ($result == TRUE) 
    {
        //$message = "Uspesno ste kreirali dogadjaj!";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc())
      {
        $naziv = $row["naziv"];
        $organizator = $row["organizator"];
        $vreme = $row["vreme"];
        $mesto = $row["mesto"];
        $datum = $row["datum"];
        $sport = $row["sport"];
        $slika = $row["slika"];

        echo "<h2>$naziv</h2>";
        echo '<div class="card" style="width:400px">';
        echo "<img class='card-img-top' src='images/$slika' alt='Card image' style='width:100%''>";
        echo " <div class='card-body'>";
        echo "<p>$organizator</p>";
        echo "<h4 class='card-title'>$sport</h4>";
        echo "<p class='card-text'>$mesto</p>";
        echo "<p class='card-text'>$vreme</p>";
        echo "<p class='card-text'>$datum</p>";
        echo "<a href='#' class='btn btn-primary'>Button</a>";
        echo "</div>";
        echo "</div><br>";
      }
    } 
    else 
    {
      //echo "0 results";
    }

    $conn->close();*/

  ?>



<!--
  <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>

  -->
  </div>

<?php  
  require "../footer.php"; 
?>
