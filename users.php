<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Users</title>

    <?php require_once("includes.php"); ?>
</head>

<body>

    <div class="container">
        <button id="create"> Sukurti naują vartotoją </button>
        <div id="alert-space"></div>

        <div id="clientForm" class="d-none">

            <input id="vardas" class="form-control" placeholder="Įveskite vartotojo vardą" />
            <input id="pavarde" class="form-control" placeholder="Įveskite vartotojo pavardę" />
            <input id="slapyvardis" class="form-control" placeholder="Įveskite vartotojo slapyvardį" />
            <input id="slaptazodis" class="form-control" placeholder="Įveskite vartotojo slaptažodį" />
            <input id="teises_id" class="form-control" placeholder="Įrašykite vartotojo teises" />


            <button id="createClient">Sukurti vartotoją</button>
        </div>

        <button id="show"> Parodyti/Paslėpti vartotojus AJAX</button>
        <div id="output" class="d-none"></div>


    </div>
    <script src="script.js"></script>
</body>

</html>