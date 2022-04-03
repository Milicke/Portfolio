<?php 

    $title = "Odobrenja";
    require '../header.php';
    
?>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "NASA";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM cekanja";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0)
    {
        echo "<div id='tabela' style='margin:50px 150px 50px 150px'>";
        
            echo "<table class='table'><thead><tr>";
            echo "<th scope='col'>#</th><th scope='col'>Korisnicko ime</th>";
            echo "<th scope='col'>Takmicenje</th><th scope='col'>Odobri</th><th scope='col'>Odbaci</th>";
            echo "</tr></thead><tbody>";
        $br = 0;
        while($row = $result->fetch_assoc())
        {
            $br++;
            $id_korisnika = $row["id_korisnika"];
            $sql = "SELECT * FROM korisnici WHERE id=$id_korisnika";
            $korisnici = $conn->query($sql);
            if(mysqli_num_rows($korisnici) > 0)
            {
                while($korisnik = $korisnici->fetch_assoc())
                {
                    $k_ime = $korisnik["k_ime"];
                }
            }
            $id_takmicenja = $row["id_takmicenja"];
            $sql = "SELECT * FROM takmicenja WHERE id=$id_takmicenja";
            $takmicenja = $conn->query($sql);
            if(mysqli_num_rows($takmicenja) > 0)
            {
                while($takmicenje = $takmicenja->fetch_assoc())
                {
                    $naziv = $takmicenje["naziv"];
                }
            }
            
            echo "<tr>";
            echo "<th scope='row'>$br</th>";
            echo "<td>" . $k_ime . "</td>";
            echo "<td>" . $naziv . "</td>";
            echo "<td><a href=\"unos.php?id_korisnika=$id_korisnika&id_takmicenja=$id_takmicenja\">Prihvati</a></td>";
            echo "<td><a href=\"#\">Prihvati</a></td>";

            echo "</tr>";
        }
        echo "</tbody></table></div>";
    }

?>

<?php

    require '../footer.php';

?>