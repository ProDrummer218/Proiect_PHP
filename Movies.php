<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "proiect");

$result = $conn->query("SELECT * FROM Movies");
$movies = $result->fetch_all(MYSQLI_ASSOC);

foreach ($movies as $movie) {
    echo "Nume: " . $movie['Nume'] . "<br>";
    echo "anAparitie: " . $movie['anAparitie'] . "<br>";
    echo "<br>";
}




$conn->close();
?>

<form action="home.php" method="post" style="position: absolute left: 50% right: inherit;;;">
  <input type="submit" value="Inapoi!">
</form>
