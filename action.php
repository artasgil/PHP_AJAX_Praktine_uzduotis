<?php require_once("connection.php"); ?>

<?php


    $sql = "SELECT * FROM vartotojai
    WHERE 1
    ORDER BY vartotojai.ID DESC
    LIMIT 50
    ";

    $result = $conn->query($sql);// uzklausos vykdymas
    echo "<table class='table table-striped'>";
    echo "<thead>";
        echo "<th>ID</th>";
        echo "<th>Vardas</th>";
        echo "<th>Pavardė</th>";
        echo "<th>Slapyvardis</th>";
        echo "<th>Teisės</th>";

    echo "</thead>";
    while($vartotojai = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>". $vartotojai["ID"]. "</td>";
        echo "<td>". $vartotojai["vardas"]. "</td>";
        echo "<td>". $vartotojai["pavarde"]. "</td>";
        echo "<td>". $vartotojai["slapyvardis"]. "</td>";
        echo "<td>". $vartotojai["teises_ID"]. "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
?>