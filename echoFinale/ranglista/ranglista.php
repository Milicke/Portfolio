<?php
    session_start();
    $title = "Rang lista";
    require "../header.php";
?>
<link rel="stylesheet" href="../assets/css/ranglista.css">
<link rel="stylesheet" href="../assets/css/pocetna.css">
<h1 class="text-center mt-5">Top 5 organizatora</h1>
<h3 class="text-center">Preostalo dana do resetovanja liste: <span id="broj">19</span></h3>

<div id="tabela" style="margin:50px 150px 50px 150px">
<table class="table">
<thead><tr><th scope="col">#</th><th scope="col">Korisnicko ime</th><th scope="col">Level</th><th scope="col">Rejting</th></tr></thead> 
<tbody><tr>
<th scope="row">1</th><td>Milicke</td><td>5</td><td>130</td></tr><tr>
<th scope="row">2</th><td>Mixa</td><td>5</td><td>125</td></tr><tr>
<th scope="row">3</th><td>Stefan</td><td>5</td><td>120</td></tr><tr>
<th scope="row">4</th><td>Ana</td><td>3</td><td>90</td></tr><tr>
<th scope="row">5</th><td>Milan</td><td>2</td><td>70</td></tr><tr>
</tbody>
</table>
</div>








<?php
    require "../footer.php";
?>