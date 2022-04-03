<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Skola";
    $conn = new mysqli($servername, $username, $password, $dbname); 

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM uspeh";
    $check = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <!-- Bootstrap CSS v5.0.2
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
        <link rel="stylesheet" href="./assets/style.css">
    </head>
    <body>
        <header>
            <h1>Uspeh učenika</h1>
            <nav class = "navbar">
                <a href="./index.php">Pocetna</a>
                <a href="./grafika.php">Grafika</a>
                <a href="./oAutoru.php">O autoru</a>
            </nav>
        </header>    
        <section class = "grafikon">
            
            <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
        </section>

        <script src="./assets/JS.js"></script>
        <?php
          echo '<script>
          var xValues = ['; 
          $i = 0;
          while($row = $check->fetch_assoc()) {
            if($i == 0) {
              echo '"' . $row["razred"] . '"';
              $i++;
            }
            else {
              echo ',"' . $row["razred"] . '"';
            }
            
        }
          
          echo '];
          var yValues = [';
              $check = $conn->query($sql);
              $i = 0;
              while($row = $check->fetch_assoc()) {
                if($i == 0) {
                  echo '"' . $row["prosOcena"] . '"';
                  $i++;
                }
                else {
                  echo ',"' . $row["prosOcena"] . '"';
                  $i++;
                }
            }
          echo '];
          var barColors = [';
          for($m = 0; $m < $i; ++$m) {
            if($m == 0) {
              echo '"blue"'; 
            }
            else {
              echo ',"blue"';
            }
          }
          
          echo '];
          
          new Chart("myChart", {
            type: "bar",
            data: {
              labels: xValues,
              datasets: [{
                backgroundColor: barColors,
                data: yValues
              }]
            },
            options: {
              legend: {display: false},
              title: {
                display: true,
                text: ""
              }
            }
          });
          </script>';

        ?>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>