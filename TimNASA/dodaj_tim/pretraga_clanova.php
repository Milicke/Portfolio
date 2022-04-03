<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hzs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

        $id_dogadjaja = $_GET["id"];

    if(isset($_GET['username']))
        $username = $_GET['username'];

    

    $sql = "SELECT * FROM ucesnici WHERE k_ime = '$username'";
    $result = $conn->query($sql);
    
    // $t = true;

    $id_timova = array();
    if(mysqli_num_rows($result) > 0)
    {

        $sql = "SELECT id_tima FROM prijavljivanje WHERE k_ime_fk = '$username'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0)
            while($row = $result->fetch_assoc())
            {
                array_push($id_timova, $row['id_tima']);
            }
        
            //$condition = implode(', ', $id_timova);

        $sql = "SELECT * FROM timovi WHERE id_dogadjaja = $id_dogadjaja AND id  IN (" . implode(',', $id_timova) . ")";

        $result = $conn->query($sql);

        if($result)
        if(mysqli_num_rows($result) > 0)
            {
                echo "Ucesnik vec ucestvuje na dogadjaju";
                return;
            }
            echo $username;
            return;

    }
    else 
    {
        echo "Ne postoji ucesnik";
    }

?>