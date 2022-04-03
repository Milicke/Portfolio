<?php
    session_start();
    $title = "Dogadjaji";
    require "../header.php";
?>
    <?php
    if(isset($_SESSION["user"])) {
        if($_SESSION["user"]["admin"] == 1) {
            echo '<div class="adminAdd">';
            echo '<div class="adminCreate"><a href="./KreirajDogadjaj.php"><i class="fa fa-plus-circle" aria-hidden="true"></i></a><span>Dodaj dogadjaj</span></div>';
            //echo '<div class="adminFunction"><a href="#" id="edit"><i class="fa fa-pencil-square" aria-hidden="true"></i>EDIT</a> <a href="#" id="delete"><i class="fa fa-trash" aria-hidden="true"></i>DELETE</a></div>';
            echo '</div></div>';
        }
    }
?>
    <section class="cards">
            <h2>DOGAĐAJI</h2>
        <div class="cardArea" id="cardArea">
        <div id="loading" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;" class="message">
            <img style="width: 5vw; height: 5vw;" src="../assets/images/Loading.gif" alt="LOADING">
        </div>
        </div>
    </section>
        <!-- PAGINACIJA-->
    <nav aria-label="Page navigation example" class="paginacija">
    <ul class="pagination justify-content-center">
        <li id="prva" class="page-item"><a class="page-link">&laquo;</a></li>
        <li id="prethodna" class="page-item">
            <a class="page-link">Prethodna</a>
        </li>
        <!--<li class="page-item"><a class="page-link">pr</a></li>-->
        <li id="trenutna" class="page-item"><a class="page-link">1</a></li>
        <!--<li class="page-item"><a class="page-link">sl</a></li>-->
        <li id="sledeca" class="page-item">
            <a class="page-link">Sledeca</a>
        </li>
        <li id="poslednja" class="page-item"><a class="page-link">&raquo;</a></li>
    </ul>
    </nav>
    <?php
            require "../footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <script src="./dogadjaji.js"></script>
</body>
</html>