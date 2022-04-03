<?php 
  
  $title = "Nov tim";
  require '../header.php'; 
  
?>
<head>
  <link rel="stylesheet" href="../assets/css/dodajTim.css">

</head>

<?php

  if(isset($_GET["id"]))
    $id = $_GET["id"];

  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hzs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT naziv FROM dogadjaji WHERE id = '$id'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $naslov = $row["naziv"];
        }
    }

?>

<div class="unosTima">
  <div class="wrapper">
    <h1>Kreirate tim za dogadjaj: <?php echo $naslov; ?></h1>
    <div class="row col-md-12">
    <form action="potvrda_unosa.php?id=<?php echo $id;?>" onsubmit = "return Validacija()" method="post" class="col-md-6">
        <div class="unos">
          <img src="../assets/media/user-friends-solid.svg" alt="user-icon">
          <input id = "naziv" class = "form-unos" type="text" name="naziv" placeholder = "Ime tima">
        </div>

        <div class="unos">
          <img src="../assets/media/user-regular.svg" alt="user-icon">
          <input id = "clan" class = "form-unos" type="text" name="clan" placeholder = "Unesi člana">
        </div>
        <span id = "greska" class="upozorenje">Greska</span>
        <input class = "submit"  type="button" id="dodaj_clana" value="Dodaj clana" onclick="dodajClana(<?php echo $id; ?>)"><br>
        <input class = "submit" style = "width: 200px;border: 1px solid #66FCF1;" type="submit" id="zavrsi" value="Završi prijavu">
       <input type="text" class="invisible" id="nevidljiv" name="nevidljiv">

    </form>

    <div class="col-md-6 prikazTim">
       <h2>Članovi tima:</h2>
       <div id = "desni_div">
       </div>
    </div>



  </div>
  </div>
</div>


<!--
  <h1>Kreirate tim za dogadjaj: _________ </h1>  dinamicno menjamo ime dogadjaja preko PHP-a


  <form action="potvrda_unosa.php" method="post">

    <label for="fname">IME TIMA:</label>
    <input type="text" id="naziv" name="naziv"><br><br>

    <label for="lname">UNESI CLANA:</label>
    <input type="text" id="clan" name="clan"><br><br>

    <input type="button" id="dodaj_clana" value="DODAJ CLANA">
    <p id="greska"></p>
    <br><br><br><br>

    <input type="submit" id="zavrsi" value="FINISH">

    <input type="text" class="invisible" id="nevidljiv" name="nevidljiv">

  </form>

  <div id="desni_div">
  </div>

<div class="col-md-12 wrapper">
      <form class="formaTim col-md-6">

        <div class="unos">
          <img src="../assets/media/user-friends-solid.svg" alt="user-icon">
          <input id = "naziv" class = "form-unos" type="text" name="naziv" placeholder = "Ime tima">
        </div>

        <div class="unos">
          <img src="../assets/media/user-regular.svg" alt="user-icon">
          <input id = "clan" class = "form-unos" type="text" name="clan" placeholder = "Unesi člana">
        </div>
        <span id = "greska" style = "color:white"></span>
        <input class = "submit" type="button" id="dodaj_clana" value="Dodaj clana">



      </form>
      <div id = "desni_div" class="prikazTim">

        <h2>Članovi tima:</h2>
        <input type="text" class="invisible" id="nevidljiv" name="nevidljiv">


      </div>
  </div>



-->

<div id='proba'></div>
<script src="main.js"></script>

<?php require '../footer.php'; ?>



