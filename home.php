<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) 
{   
?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>HOME</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
            <a href="logout.php">Logout</a>
        </body>
    </html>
<?php
}else{
    header("Location: index.php");
    exit();
}
?>

    <form action="Cars.php" method="post">
        <input type="submit" value="Du-te sa vezi masini!">
    </form>

    <form action="Movies.php" method ="post">
        <input type="submit" value="Du-te sa vezi doua filme misto!">
    </form>

    <form action="Games.php" method ="post">
        <input type="submit" value="Du-te sa vezi jocuri!">
    </form>


