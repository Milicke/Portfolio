<?php 

    $title = "Dogadjaj";
    require "../header.php"; 

?>
    <head>
        <link rel="stylesheet" href="../assets/css/novDogadjaj.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <script src="./Validacija.js"></script>
    <div class="orgDogadjaj">
        <form class = "forma" method="post" action="unos.php" onsubmit = "return Validacija()" enctype="multipart/form-data">
            <h1>Događaj</h1>
            <b><p class="upozorenje" style = "color:red" id = "alert">Poruka upozorenja</p></b>
            <div class="unos">
               <img src="../assets/media/user-friends-solid.svg" alt="user-icon">
                <input id = "text-unos" class = "form-unos" type="text" name="naziv" placeholder = "Naziv događaja">
            </div>

            <div class="imeprezime">
                <div class="unos">
                    <img src="../assets/media/clock-regular.svg" alt="user-icon">
                    <input id = "vreme" class = "form-unos" type="text" name="vreme" placeholder = "Vreme">
                </div>

                <div class="unos">
                    <img src="../assets/media/calendar-alt-regular.svg" alt="user-icon">
                    <input id = "datum" class = "form-unos" type="date" name="datum">
                </div>
            </div>
            <div class="unos">
                <img src="../assets/media/map-marker-alt-solid.svg" alt="user-icon">   
                <input id = "mesto" class = "form-unos" type="text" name="mesto" placeholder = "Mesto održavanja">
            </div>

            

            <div>
                <select class = "unos sekcija-unos" name="sport">
                    <option value="Fudbal">Fudbal</option>
                    <option value="Kosarka">Košarka</option>
                    <option value="Odbojka">Odbojka</option>
                    <option value="Vaterpolo">Vaterpolo</option>
                </select>
            </div>

            <!-- Unosenje slike -->
            <div class="form-group">
                <input style = "color:white;" type="file" name="image" hidden="hidden" id="real-button" disabled>
                <button class="submit" for="real-button" id="custom-button"><i class="fa fa-file-image-o" style="font-size:24px"></i> Dodaj sliku</button>
                <span id="custom-text" class="text-light">No file selected</span>
            </div>


            <input class = "submit" type="submit" name="posDogadjaj" value = "Kreiraj događaj">
        </form>
    </div>


    <script>
        
        const realBtn = document.getElementById("real-button");
        const customBtn = document.getElementById("custom-button");
        const customText = document.getElementById("custom-text");

        // realBtn.addEventListener("click", function(){
        //     console.log("kliknuto je zasebno");
        // })

        customBtn.addEventListener("click", function(event){
            event.preventDefault();
            realBtn.disabled = false;
            realBtn.click();
            //realBtn.disabled = true;
            //console.log("KLIKNUTO JE U FUNKCIJI");
        });

        realBtn.addEventListener("change", function(){
            if(realBtn.value)
            {
                customText.innerHTML = realBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
            }
            else{
                customText.innerHTML = "No file selected";
            }
        });

    </script>


    <!--
    <form method="post" action="unos.php">

        <input type="text" name="naziv"><br>
        <input type="text" name="vreme" placeholder="16:00"><br>
        <input type="text" name="mesto"><br>
        <input type="date" name="datum"><br>
        <select name="sport">
            <option value="Fudbal">Fudbal</option>
            <option value="Kosarka">Kosarka</option>
            <option value="Odbojka">Odbojka</option>
            <option value="Vaterpolo">Vaterpolo</option>
        </select>
        <input type="submit" name="posDogadjaj">

    </form>
    -->


<?php require '../footer.php'; ?>