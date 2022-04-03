<?php
    session_start();

    if(isset($_SESSION["k_ime"]))
    {
        if (isset($_POST["posDogadjaj"]))
        {

            $naziv = $_POST["naziv"];
            $vreme = $_POST["vreme"];
            $mesto = $_POST["mesto"];
            $datum = $_POST["datum"];
            $sport = $_POST["sport"];
            $organizator = $_SESSION["k_ime"];

            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if(isset($_FILES['image']))
            {

                if ($_FILES["image"]["size"] > 2500000)
                {
                    $message = "Slika je prevelika";
                    require 'novDogadjaj.php';
                    $uploadOk = 0;     
                }
                else
                {
                    $post_image = $_FILES['image']['name'];
                    $post_image_temp = $_FILES['image']['tmp_name'];
                }
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {

                    if($uploadOk != 0)
                    {
                        $message = "Dozvoljeni su samo formati 'png', 'jpg', 'jpeg', 'gif'";
                        require 'novDogadjaj.php';
                    }
                    $uploadOk = 0;

                }


                if ($uploadOk == 0) {
                  } 
                  else 
                  {
                    if (move_uploaded_file($post_image_temp, "images/$post_image")) 
                    {

                        $url = 'http://localhost/HZS/TimNasa/api/create.php';
                        $data = array('naziv' => $naziv, 'organizator' => $organizator, 'sport' => $sport, 'mesto' => $mesto, 'datum' => $datum, 'vreme' => $vreme, 'post_image' => $post_image);

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

                        $message = "Uspesno ste kreirali dogadjaj!";
                        require 'sviDogadjaji.php';

                    } 
                    else 
                    {
                        $message = "Doslo je do greske prilikom postavljanja fajla";
                        require 'novDogadjaj.php';
                    }
                  }
            }
            else
            {
                $message = "Niste izabrali sliku";
                require 'novDogadjaj.php';
            }

        }
    }
    else
    {
        $message = "Morate biti ulogovani!";
        require 'novDogadjaj.php';
    }

?>