<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "proiect");

$result = $conn->query("SELECT * FROM Cars");
$cars = $result->fetch_all(MYSQLI_ASSOC);

foreach ($cars as $car) {
    echo "Modelul: " . $car['Modelul'] . "<br>";
    echo "Firma: " . $car['Firma'] . "<br>";
    echo "AnFabricatie: " . $car['AnFabricatie'] . "<br>";
    echo "<br>";
}




$conn->close();
?>

<form action="home.php" method="post">
  <input type="submit" value="Inapoi!">
</form>
