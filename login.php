<?php
session_start();
include("db_conn.php");

if(isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if(empty($username)){
    header("Location: index.php?erro=User Name is required");
    exit();
}

if(empty($password)){
    header("Location: index.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM users WHERE user_name = ? AND password = ?";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: index.php?error=SQL Error");
    exit();
}else{
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['user_name'] === $username && $row['password'] === $password){
            echo "Logged in!";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
            exit();
        }
        else{
            header("Location: index.php?error=Incorrect Useraname or Password");
            exit();
        }
    }else{
        header("Location: index.php");
        exit();
    }
}
