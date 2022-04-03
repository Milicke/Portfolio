<?php 
    $title = "Pocetna";
    require "../header.php";
?>

<h1 class="text-center mt-5">Top 5 takmičara</h1>
<h3 class="text-center">Preostalo dana do proglašenja pobednika: <span id="broj">26</span></h3>

<?php 

      
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nasa";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM korisnici ORDER BY poeni DESC";
    $result = $conn->query($sql);

    $br_timova = 0;
    if(mysqli_num_rows($result) > 0)
    {
        echo "<div id='tabela' style='margin:50px 150px 50px 150px'>";
        
        echo "<table class='table'><thead><tr>";
        echo "<th scope='col'>#</th><th scope='col'>Avatar</th><th scope='col'>Korisnicko ime</th><th scope='col'>Level</th>";
        echo "<th scope='col'>Broj poena</th><th scope='col'>Progress</th>";
        echo "</tr></thead> <tbody>";

        $br = 1;
        $pokemoni = array("1_lv2.png", "1_lv1.png", "2_lv1.png", "3_lv1.png", "1_lv1.png", "2_lv1.png", "3_lv1.png");
        while($row = $result->fetch_assoc())
        {
            if($row['poeni'] == NULL){
                $level = 0;
                $br_poena = 0;
            }
            else{
                $level =($row['poeni'] - ($row['poeni'] % 100))/100;
                $br_poena = $row['poeni'] % 100;
            }
            echo "<tr>";
            echo "<th scope='row'>$br</th>";
            echo "<td><img src='slike/" . $pokemoni[$br - 1] . "' style='width: 40px; height: 40px;'></td>";
            echo "<td>" . $row['k_ime'] . "</td>";
            echo "<td>" . $level . "</td>";
            echo "<td>" . $br_poena . "</td>";
            echo "<td><div class='progress'>";
            echo "<div class='progress-bar progress-bar-striped progress-bar-animated' style='width:$br_poena%'>". $br_poena . "%" ."</div></div></td>";

            echo "</tr>";

            $br++;
        }

        echo "</tbody></table>";
        echo "</div>";
    }




?>



<!--
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Korisnicko ime</th>
      <th scope="col">Level</th>
      <th scope="col">Broj poena</th>
      <th scope="col">Progress</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>4</td>
      <td>70</td>
      <td>  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%"></div>
  </div></td>
    </tr>
    <hr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%"></div>
  </div></td>
    </tr>
  </tbody>
</table> 
-->

<?php

    require '../footer.php';

?>