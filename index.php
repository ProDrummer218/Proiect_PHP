<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOGIN </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])){
            ?>
            <p class ="error"> <?php echo $_GET['error']; ?> </p>
            <?php
        } ?>
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username"><br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
    </form>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,64L12,101.3C24,139,48,213,72,245.3C96,277,120,267,144,250.7C168,235,192,213,216,197.3C240,181,264,171,288,170.7C312,171,336,181,360,202.7C384,224,408,256,432,245.3C456,235,480,181,504,181.3C528,181,552,235,576,240C600,245,624,203,648,165.3C672,128,696,96,720,106.7C744,117,768,171,792,170.7C816,171,840,117,864,112C888,107,912,149,936,138.7C960,128,984,64,1008,32C1032,0,1056,0,1080,42.7C1104,85,1128,171,1152,176C1176,181,1200,107,1224,101.3C1248,96,1272,160,1296,208C1320,256,1344,288,1368,261.3C1392,235,1416,149,1428,106.7L1440,64L1440,0L1428,0C1416,0,1392,0,1368,0C1344,0,1320,0,1296,0C1272,0,1248,0,1224,0C1200,0,1176,0,1152,0C1128,0,1104,0,1080,0C1056,0,1032,0,1008,0C984,0,960,0,936,0C912,0,888,0,864,0C840,0,816,0,792,0C768,0,744,0,720,0C696,0,672,0,648,0C624,0,600,0,576,0C552,0,528,0,504,0C480,0,456,0,432,0C408,0,384,0,360,0C336,0,312,0,288,0C264,0,240,0,216,0C192,0,168,0,144,0C120,0,96,0,72,0C48,0,24,0,12,0L0,0Z"></path></svg>
    
</body>
</html>