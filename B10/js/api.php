<?php
    require "../handlers/DataBaseConfig.php";
    $sql = "SELECT * FROM reci";
    $i = 0;
    $array = array();
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $array[$i++] = $row;
    }
    echo json_encode($array);

?>