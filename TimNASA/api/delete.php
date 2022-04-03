<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hzs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST["id"];

    $sql = "SELECT id FROM timovi WHERE id_dogadjaja=$id";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $id_tima = $row["id"];
            $sql = "DELETE FROM prijavljivanje WHERE id_tima = '$id_tima'";
            if ($conn->query($sql) === TRUE) 
            {
                //echo "Uspesno";
            } 
            else 
            {
                //echo $conn->error;
            }
        }
    
        $sql = "DELETE FROM timovi WHERE id_dogadjaja = '$id'";
    
        if ($conn->query($sql) === TRUE) 
        {
            echo "Uspesno";
            $sql = "DELETE FROM dogadjaji WHERE id = '$id'";
    
            if ($conn->query($sql) === TRUE) 
            {
                //echo "Uspesno";
            } 
            else 
            {
                //echo $conn->error;
            }
        } 
        else 
        {
            //echo $conn->error;
        }

    }
    else
    {
        $sql = "DELETE FROM timovi WHERE id_dogadjaja = '$id'";
    
        if ($conn->query($sql) === TRUE) 
        {
            //echo "Uspesno";
            $sql = "DELETE FROM dogadjaji WHERE id = '$id'";
    
            if ($conn->query($sql) === TRUE) 
            {
                //echo "Uspesno";
            } 
            else 
            {
                //echo $conn->error;
            }
        } 
        else 
        {
            //echo $conn->error;
        }
    }

?>