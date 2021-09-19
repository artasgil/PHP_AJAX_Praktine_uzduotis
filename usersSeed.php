<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vartotoju generavimas</title>
</head>
<body>
    <form action="" method="get">
        <button type="submit" name="submit">Sukurti vartotojus</button>
    </form>
    <?php 

    require_once("connection.php");

    if(isset($_GET["submit"])) {
        for ($i=0; $i<10; $i++) {

            $vardas = "vardas".$i;
            $pavarde = "pavarde".$i;
            $slapyvardis = "slapyvardis".$i;
            $slaptazodis = "slaptazodis".$i;
            $teises_id = rand(1, 4);

            $sql = "INSERT INTO `vartotojai`(`vardas`, `pavarde`, `slapyvardis`, `slaptazodis`, `teises_ID`) 
            VALUES ('$vardas','$pavarde','$slapyvardis', '$slaptazodis', '$teises_id')";

            if(mysqli_query($conn, $sql)) {
                echo "Vartotojai sukurti sekmingai";
                echo "<br>";
            } else {
                echo "Kazkas ivyko negerai";
                echo "<br>";
            }
        }
    }

?>
</body>
</html>