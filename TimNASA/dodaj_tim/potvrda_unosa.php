<?php 

    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hzs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id_dogadjaja = $_GET["id"];
    if(isset($_POST['nevidljiv']))
        {
          $clanovi = $_POST['nevidljiv'];
        }
        

    $niz = explode(",",$clanovi);
    array_pop($niz);

    if(isset($_SESSION["k_ime"]))
    {
      if(isset($_POST['naziv']))
      {
        $naziv = $_POST['naziv'];
        
        if($naziv == "")
        {
          $message = "Niste uneli naziv tima!";
          //var_dump($message);
          require '../dodaj_tim/dodaj_tim.php';
        }
        else
        {

          if(empty($niz))
          {
            $message = "Niste uneli ni jednog clana tima!";
            require '../dodaj_tim/dodaj_tim.php';
          }
          else
          {
            $sql = "INSERT INTO timovi(id_dogadjaja, naziv) VALUES ($id_dogadjaja, '$naziv');";

            if($conn->query($sql) === TRUE) 
            {
              $last_id = $conn->insert_id;
              //echo "Uspesno";
            } 
            else 
            {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $poruka = true;
            if (!empty($niz))
            {
              foreach($niz as $clan)
              {
                $sql = "INSERT INTO prijavljivanje(id_tima, k_ime_fk) VALUES ($last_id,'$clan')"; 
                if($conn->query($sql) === TRUE) 
                { 
                  if($poruka)
                  {
                    $message = "Uspesno ste napravili nov tim!";
                    //var_dump($message);
                    $poruka = false;
                    require '../pocetna/index.php';
                  }
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }
            }
            else
            {
              $message = "Niste uneli ni jednog clana tima!";
              //var_dump($message);
              require '../dodaj_tim/dodaj_tim.php';
            }
          }
        }
      }
    }
    else
    {
      $message = "Morate biti ulogovani!";
      //var_dump($message);
      require '../pocetna/index.php';
    }
    //var_dump($_SESSION["k_ime"]);
?>