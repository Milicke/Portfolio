<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hzs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM dogadjaji";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $redovi[] = $row;
        }
        header('Content-Type: application/json');
        $json_string = json_encode($redovi, JSON_PRETTY_PRINT);
        print_r($json_string);
    }
?>