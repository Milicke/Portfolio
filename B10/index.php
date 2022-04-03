<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recnik</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Elektronski recnik</h1>
    <div class="navbar">
        <a href="./index.php">Recnik</a>
        <a href="./dodavanje.php">Dodavanje novih reci</a>
        <a href="./uputstvo.php">Uputstvo</a>
    </div>
    <form onsubmit = "return Prevedi();return false" method="post">
        <select id="jezik">
            <option value="default">Selektuj smer prevodjenja</option>
            <option value="srpski">engleski-srpski</option>
            <option value="engleski">srpski-engleski</option>
        </select><br>
        Engleska rec <input type="text" id="Erec"><br>
        Srpska rec <input type="text" id="Srec"><br>
        Opis: <textarea id="opis" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Prevedi">
    </form>

    
    <script src="./js/main.js"></script>
</body>
</html>