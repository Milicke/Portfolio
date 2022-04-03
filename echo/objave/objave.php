<?php
    session_start();
    if(!isset($_SESSION["user"])) {
        $_SESSION["upozorenje"] = "You must log in to see posts!";
        header('location: ../login/login.php');
    }
    $title = "Posts";
    require "../header.php";
?>

    <section class="posts"  id="posts-container">
        <?php
            if(isset($_SESSION["user"])) {
                if($_SESSION["user"]["admin"] == 1) {
                    echo '<div class="adminAdd testx">';
                    echo '<div class="adminCreate"><a href="./Aobjave.php"><i class="fa fa-plus-circle" aria-hidden="true"></i></a><span>Create post</span></div>';
                    //echo '<div class="adminFunction"><a href="#" id="edit"><i class="fa fa-pencil-square" aria-hidden="true"></i>EDIT</a> <a href="#" id="delete"><i class="fa fa-trash" aria-hidden="true"></i>DELETE</a></div>';
                    echo '</div>';
                }
            }
        ?>
        <div id="loading" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;" class="message">
            <img style="width: 5vw; height: 5vw;" src="../assets/images/Loading.gif" alt="LOADING">
        </div>
        <?php
        /*
            require "../handlers/DataBaseConfig.php";
            $sql = "SELECT * FROM objave";
            $podaci = $conn->query($sql);
            if($podaci->num_rows > 0) {
                while($row = $podaci->fetch_assoc()) {
                    echo '<div class = "card col-md-4">';
                        echo '<div class = "postCnt">';
                            echo '<img src="../assets/images/uploads/' . $row["slika"] . '" alt="las vegas">';
                        echo '</div>';
                        echo '<div class="details">';
                        echo '<i id = "lajk'. $row["id"] . '" class="fa fa-thumbs-up icon" style = "position:absolute;right:0;top:0;margin-right:10px;margin-top:20px;overflow-y:hidden;border:none;"></i>';
                        echo '<p style = "position:absolute;right:0;top:0;margin-right:5px;margin-top:20px;overflow-y:hidden;border:none;color:white">' . $row["br_lajkova"] . '</p>';
                            if($_SESSION["user"]["admin"] == 1) {
                                echo '<h3>' . $row["naslov"] . '<span>&nbsp#' . $row["id"] . '</span>' . '</h3>';
                            }
                            else {
                                echo '<h3>' . $row["naslov"] . '</h3>';
                            }
                            echo '<p style = "height: 150px;overflow-y:scroll" >' . $row["sadrzaj"] . '</p>';
                        echo '</div>';
                    echo "</div>";
                }
            }
            else {
                echo "<p class = 'nemanje'>Nema objava! </p>";
            }
    */
    ?>
    </section>
    <!-- PAGINACIJA-->
    <nav aria-label="Page navigation example" class="paginacija">
    <ul class="pagination justify-content-center">
        <li id="prva" class="page-item"><a class="page-link">&laquo;</a></li>
        <li id="prethodna" class="page-item">
            <a class="page-link">Previous</a>
        </li>
        <!--<li class="page-item"><a class="page-link">pr</a></li>-->
        <li id="trenutna" class="page-item"><a class="page-link">1</a></li>
        <!--<li class="page-item"><a class="page-link">sl</a></li>-->
        <li id="sledeca" class="page-item">
            <a class="page-link">Next</a>
        </li>
        <li id="poslednja" class="page-item"><a class="page-link">&raquo;</a></li>
    </ul>
    </nav>
    <!--- PAGINACIJA-->
            
    <script src="./objave.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php
  require "../footer.php";
?>