<head>
    <link rel="stylesheet" href="../assets/css/alert.css">
</head>


<script>

    function Prikazi(id)
    {   
        <?php 
            if(isset($_SESSION["k_ime"]))
                $k_ime = $_SESSION["k_ime"];
            else
                $k_ime = "";
            if(isset($_GET["id"]))
                $id_takmicenja = $_GET["id"];
            else
              $id_takmicenja = "";

            if($k_ime != "")
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "NASA";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM korisnici WHERE k_ime = '$k_ime'";
                
                $result = $conn->query($sql);

                if(mysqli_num_rows($result) > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                    $id_korisnika = $row["id"];
                    }
                }
            }
            else
            {
                $id_korisnika = "";
            }

        ?>
        document.getElementById("output").innerHTML = "Pošaljite SMS poruku na broj 5353 sa tekstom " + id + " <?php echo $k_ime; ?>";
        $("#myModal").modal('show');
    }
</script>

<p id="proba"></p>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">
      <div class="modal-header boja1">
        <button type="button" class="close" data-dismiss="modal">x</button>
      </div>
      <div class="modal-body">
        <p id="output"></p>
      </div>
      <div class="modal-footer">
        <!--<a href="unos.php?id_takmicenja=<?php //echo $id_takmicenja; ?>&id_korisnika=<?php //echo $id_korisnika; ?>" class="btn btn-default" data-dismiss="modal">Uplati</a>-->
        <?php echo "<a href='unos.php?id_takmicenja=$id_takmicenja&id_korisnika=$id_korisnika' class='btn btn-default' style='color:white'>Uplati</a>" ?>
      </div>
    </div>

  </div>
</div>