<?php
    $conn = mysqli_connect("localhost", "root", "rootroot", "users");

if(isset($_POST["username"]) && isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["email"]))
{
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $sql_same = "SELECT * FROM user WHERE username = '$username'";
    $order = mysqli_query($conn, $sql_same);

    if(mysqli_num_rows($order) > 0){
        header("location: signup_page.php?error=이미 존재하는 아이디입니다.");
        exit();
    }
    else
    {
        $sql_save = "INSERT INTO user(username, name, password, email) values('$username', '$name', '$hash', '$email')";
        $result = mysqli_query($conn, $sql_save);
        if($result){
            header("location: index.php?success=성공적으로 회원가입이 완료되었습니다.");
            exit();
        }
    }
}    
