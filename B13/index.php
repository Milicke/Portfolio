<?php
    class Korisnik
    {
        public $id;
        public $ime;
        public $prezime;
        public $adresa;
        public $mesto;
        public $broj;
        public $email;
    }
    $i = 0;
    $file = fopen("imenik.txt","r");
    while(!feof($file)) {
        $podaci[$i] = new Korisnik();
        $line = fgets($file);
        $temp = explode(" | ",$line);
        $podaci[$i]->id = $temp[0];
        $podaci[$i]->ime = $temp[1];
        $podaci[$i]->prezime = $temp[2];
        $podaci[$i]->adresa = $temp[3];
        $podaci[$i]->mesto = $temp[4];
        $podaci[$i]->broj = $temp[5];
        $podaci[$i]->email = $temp[6];
        $i++;
    }
    //echo $podaci[2]->ime;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <form action="./index.php" method="post">
        Ime: <input value = "" type="text" name="ime" id="ime"><br>
        Prezime: <input value = "" type="text" name="prezime" id="prezime"><br>
        Adresa: <input value = "" type="text" name="adresa" id="adresa"><br>
        Telefon: <input value = "" type="number" name="broj" id="broj"><br>
        Email: <input value = "" type="text" name="email" id="email"><br>
        <select value = "" name="mesto" id="mesto">
            <?php
                $k = array();
                $i = 0;
                for($c = 0; $c < count($podaci); ++$c) {
                    if(!in_array($podaci[$c]->mesto,$k)) {
                        echo "<option value = " . $podaci[$c]->mesto . ">" . $podaci[$c]->mesto . "</option>";
                        $k[$i++] = $podaci[$c]->mesto;
                    }
                }
            ?>
        </select><br>
        <input type="submit" name = "check" value="Trazi">
    </form>
    <hr>
    <?php
        if(array_key_exists("check",$_POST)) {
            $ime = $_POST["ime"];
            $prezime = $_POST["prezime"];
            $adresa = $_POST["adresa"];
            $broj = $_POST["broj"];
            $email = $_POST["email"];
            $mesto = $_POST["mesto"];
            echo '<table>
                <thead><tr><th scope="col">Rbr</th><th scope="col">Ime</th><th scope="col">Prezime</th><th scope="col">Adresa</th><th scope="col">Telefon</th><th scope="col">E-mail</th><th scope="col">Mesto</th></tr></thead> 
                <tbody>';
        
        for($k = 0; $k < count($podaci); ++$k) {
            if(str_contains($podaci[$k]->ime,$ime) && str_contains($podaci[$k]->prezime,$prezime) && str_contains($podaci[$k]->adresa,$adresa) && str_contains($podaci[$k]->broj,$broj) && str_contains($podaci[$k]->mesto,$mesto) && str_contains($podaci[$k]->email,$email))
            {
              echo '<tr><td scope="row">' . $podaci[$k]->id . '</td> <td>' . $podaci[$k]->ime . '</td> <td>' . $podaci[$k]->prezime . ' </td><td>' . $podaci[$k]->adresa . ' </td><td>' . $podaci[$k]->broj . ' </td><td>' . $podaci[$k]->email . ' </td><td>' . $podaci[$k]->mesto . ' </td></tr>';
            }
          }

        echo '</tbody>
        </table>';
        }
    ?>
</body>
</html>