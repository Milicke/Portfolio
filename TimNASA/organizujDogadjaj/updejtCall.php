<?php

    if(isset($_POST["sacuvaj"]))
    {
        $id = $_GET["q"];
        $vreme = $_POST["vreme"];
        $mesto = $_POST["mesto"];
        
        $url = 'http://localhost/HZS/TimNasa/api/updejt.php';
        $data = array('id' => $id, 'vreme' => $vreme, 'mesto' => $mesto);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { /* Handle error */ }

        $message = "Uspesno ste izmenili dogadjaj!";
        require 'sviDogadjaji.php';
    }
    else if(isset($_POST["izbrisi"]))
    {
        $id = $_GET["q"];
        $url = 'http://localhost/HZS/TimNasa/api/delete.php';
        $data = array('id' => $id);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) 
        { 
            //print_r($result); 
        }
        //print_r($result);
        $message = "Uspesno ste izbrisali dogadjaj!";
        require 'sviDogadjaji.php';
    }
    else if(isset($_POST['']))

?>