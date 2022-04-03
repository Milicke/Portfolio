<?php

    $title = 'Takmičenja';
    require '../header.php';

?>
<head>
    <link rel="stylesheet" href="../css/tamicenja.css">
</head>

<div class="pozadina">
    <?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "NASA";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $takmicenja = ["takmicenje1.jpg", "takmicenje2.jpg", "takmicenje3.jpg"];
    $br_timova = 0;    
    $i = 0;

    if(isset($_SESSION["k_ime"]))
        $k_ime = $_SESSION["k_ime"];
    else
        $k_ime = "";
        

    $sql = "SELECT * FROM takmicenja";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $br_timova = 0;
            $naziv = $row["naziv"];
            $datum = $row["datum"];
            $vreme = $row["vreme"];
            $id_takm = $row["id"];
            $id = $row["id_igrice"];

            $sql = "SELECT * FROM korisnici WHERE k_ime = '$k_ime'";
                
            $result5 = $conn->query($sql);

            if(mysqli_num_rows($result5) > 0)
            {
                while($red = $result5->fetch_assoc())
                {
                    $id_korisnika = $red["id"];
                }
            }
            else
            {
                $id_korisnika = "";
            }

            $sql = "SELECT * FROM igrice WHERE id = '$id'";
            $result1 = $conn->query($sql);
            if(mysqli_num_rows($result1) > 0)
            {
                while($red1 = $result1->fetch_assoc())
                {
                    $igrica = $red1["naziv"];
                }
            }

            $sql = "SELECT * FROM prijavljivanja WHERE id_takmicenja = $id_takm AND id_korisnika = '$id_korisnika'";
            $result14 = $conn->query($sql);
            if(mysqli_num_rows($result14) > 0)
            {
                $prijava = "Prijavljeni ste";
                $link = "#";
            }
            else
            {
                $sql = "SELECT * FROM cekanja WHERE id_takmicenja = $id_takm AND id_korisnika = '$id_korisnika'";
                $result13 = $conn->query($sql);
                if(mysqli_num_rows($result13) > 0)
                {
                    $prijava = "Na čekanju";
                    $link = "#";
                }
                else
                {
                    $prijava = "Prijavi se";
                    $link = "../organizacije/sve_organizacije.php?id=$id_takm";
                }
            }

            $sql = "SELECT * FROM prijavljivanja WHERE id_takmicenja = $id_takm";
            $result2 = $conn->query($sql);

            if($i%3==0)
                echo "<div class=\"row no-gutters\">";  
                
            echo "<div class=\"col-xl-4\">";
                echo '<div class="card">';
                    echo "<img class='card-img-top' src='../media/" . $takmicenja[$i] . "' alt='Card image' style='width:100%; height: 250px'>";
                    echo "<div class='card-body'>";
                        echo "<div class='d-flex pocetak'>";
                            echo "<h2>$naziv</h2><p class='card-text'>$datum</p>";
                        echo "</div>";
                        echo "<h4 class='text-light card-title'>Igrica: $igrica</h4>";
                        echo "<h4 class='text-light card-title'>Vreme: $vreme</h4>";
                        echo "<h4 class='text-light card-title'>Broj učesnika: " . mysqli_num_rows($result2) . "</h4>";
                        echo "<a href='$link' class='btn btn-primary btnF'>$prijava</a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
                
            if(($i-2)%3==0)
                echo "</div>";
            $i++;
        }
        if(($i-3)%3!=0 || ($i-1)%3!=0)
            echo "</div>";
    }
    else 
    {
        echo "<h1>Nema događaja u blizini!</h1>";
    }

    ?>

</div>

<?php 

    require '../footer.php';

?>