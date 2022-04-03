<?php 

    $title = "Pocetna";
    require "../header.php";
    require "../handler/doniraj.php";

?>
<h3 class="text-center mt-5">Humanitarne organizacije kojima možete donirati novac</h3>

<div id="organizacije"  style='margin:50px 150px 50px 150px'>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Naziv organizacije</th>
      <th scope="col">Broj uplata</th>
      <th scope="col">Doniraj</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>ASTRA</td>
      <td>457</td>
      <td><button type="button" class="btn btn-success" onclick="Prikazi(1)">Doniraj</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Crveni krst</td>
      <td>252</td>
      <td><button type="button" class="btn btn-success" onclick="Prikazi(2)">Doniraj</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Fondacija Novak Djokovic</td>
      <td>722</td>
      <td><button type="button" class="btn btn-success" onclick="Prikazi(3)">Doniraj</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Budi human - Aleksandar Šapić</td>
      <td>158</td>
      <td><button type="button" class="btn btn-success" onclick="Prikazi(4)">Doniraj</button></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Srbi za Srbe</td>
      <td>410</td>
      <td><button type="button" class="btn btn-success" onclick="Prikazi(5)">Doniraj</button></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>UNICEF</td>
      <td>550</td>
      <td><button type="button" class="btn btn-success" onclick="Prikazi(6)">Doniraj</button></td>
    </tr>
  </tbody>
</table> 
</div>

<?php

    require '../footer.php';

?>

