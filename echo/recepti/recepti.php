<?php
    session_start();
    if(!isset($_SESSION["user"])) {
        $_SESSION["upozorenje"] = "You must log in to see recipes!";
        header('location: ../login/login.php');
    }
    $title = "Recipes";
    require "../header.php";
?>
<section style = "background-color:#151320">
<!--<link rel="stylesheet" href="../assets/scss/recepti.css">-->
<?php
    if(isset($_SESSION["user"])) {
        if($_SESSION["user"]["admin"] == 1) {
            echo '<div class="adminAdd testx">';
            echo '<div class="adminCreate"><a href="./Arecepti.php"><i class="fa fa-plus-circle" aria-hidden="true"></i></a><span>Create recipe</span></div>';
            //echo '<div class="adminFunction"><a href="#" id="edit"><i class="fa fa-pencil-square" aria-hidden="true"></i>EDIT</a> <a href="#" id="delete"><i class="fa fa-trash" aria-hidden="true"></i>DELETE</a></div>';
            echo '</div>';
            echo '<div class="recipesCnt" id="recepti-container">';
        }
        else echo '<div class="recipesCnt testx" id="recepti-container">';
    }
?>

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
<script src="./recepti.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php
    require "../footer.php";
?>