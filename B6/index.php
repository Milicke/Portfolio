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
    $sql = "SELECT * FROM uspeh ORDER BY prosOcena DESC";
    $check = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        <section>
            <table class="table">
                <thead><tr><th scope="col">Broj odeljenja</th><th scope="col">Odlicni</th><th scope="col">Vrlo dobri</th><th scope="col">Dobri</th><th scope="col">Dovoljni</th><th scope="col">Nedovoljni</th><th scope="col">Prosecna ocena</th></tr></thead> 
                <tbody>
                    <?php
                        while($row = $check->fetch_assoc()) {
                            echo '<tr><td scope="row">'. $row["razred"] . '</td><td>' . $row["odlican"] . '</td><td>' . $row["vrlodobar"] . '</td><td>' . $row["dobar"] . '</td><td>' . $row["dovoljan"] . '</td><td>' . $row["nedovoljan"] . '</td><td>' . $row["prosOcena"] . '</td></tr>';
                        }
                    ?>
                </tbody>
                </table>
        </section>

        <script src="./assets/JS.js"></script>
        <!-- Bootstrap JavaScript Libraries
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
    </body>
</html>