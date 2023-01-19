<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "proiect");

$result = $conn->query("SELECT * FROM Games");
$games = $result->fetch_all(MYSQLI_ASSOC);

foreach ($games as $game) {
    echo "Nume: " . $game['Nume'] . "<br>";
    echo "Tip: " . $game['Tip'] . "<br>";
    echo "<br>";
}




$conn->close();
?>

<form action="home.php" method="post">
  <input type="submit" value="Inapoi!">
</form>