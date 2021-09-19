<?php require_once("connection.php"); ?>
<?php require_once("includes.php"); ?>


<?php 

if(isset ($_GET["vardas"]) && !empty($_GET["vardas"]) && ($_GET["pavarde"]) && !empty($_GET["pavarde"]) && isset($_GET["slapyvardis"]) && !empty($_GET["slapyvardis"])
&& ($_GET["teises_id"]) && !empty($_GET["teises_id"]) && ($_GET["slaptazodis"]) && !empty($_GET["slaptazodis"])){
$vardas = $_GET["vardas"];
$pavarde = $_GET["pavarde"];
$slapyvardis = $_GET["slapyvardis"];
$teises_id = $_GET["teises_id"];
$slaptazodis = $_GET["slaptazodis"];


$sql = "INSERT INTO `vartotojai`(`vardas`, `pavarde`, `slapyvardis`, `teises_ID`, `slaptazodis`) VALUES ('$vardas','$pavarde','$slapyvardis', '$teises_id', '$slaptazodis')";

if(mysqli_query($conn, $sql)) {

    echo '<div class="alert alert-success" role="alert">';
        echo "Vartotojas".$vardas." ".$pavarde." pridėtas sėkmingai";        
    echo '</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">';
        echo "Kazkas ivyko negerai. Uzklausa nesekminga";
    echo '</div>';    
}

} else { 
    echo '<div class="alert alert-danger" role="alert">';
        echo "Visi laukeliai turi būti užpildyti";
    echo '</div>';    
}
?>
