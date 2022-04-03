<?php
    if(array_key_exists("check", $_POST)) {
        require "./handlers/DataBaseConfig.php";
        $srpska = $_POST["Srec"];
        $engelska = $_POST["Erec"];
        $opis = $_POST["opis"];
        $sql = "INSERT INTO reci(srpski,engleski,opis) VALUES('" . $srpska . "','" . $engelska . "','" . $opis . "')";
        if($conn->query($sql) === TRUE)echo "<script>alert('Uspesno dodata rec!');</script>";
        else echo "<script>alert('Neuspesno!');</script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recnik</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Elektronski recnik</h1>
    <div class="navbar">
        <a href="./index.php">Recnik</a>
        <a href="./dodavanje.php">Dodavanje novih reci</a>
        <a href="./uputstvo.php">Uputstvo</a>
    </div>

    <form action = "./dodavanje.php" method="post">
        Engleska rec <input type="text" id="Erec" name ="Erec"><br>
        Srpska rec <input type="text" id="Srec" name ="Srec"><br>
        Opis: <textarea id="opis" value = "" name = "opis" cols="30" rows="10"></textarea><br>
        <input type="submit" name = "check" value="Snimi">
    </form>

    
    <script src="./js/main.js"></script>
</body>
</html>