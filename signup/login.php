<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "rootroot", "users");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        if(empty($username)){
            header("location: index.php?error=아이디를 입력하세요");
            exit();
        }
        else if(empty($password)){
            header("location:index.php?error=비밀번호를 입력하세요.");
            exit();
        }
        else {
            $sql = "SELECT * FROM user WHERE username='$username'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){
               $row = mysqli_fetch_assoc($result);
               $hash = $row["password"];

               if(password_verify($password, $hash)){
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["name"] = $row["name"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["id"] = $row["id"];

                    header('X-Frame-Options: DENY');
                    header("location:mypage.php");
                    exit();
               }
               else {
                    header("location:index.php?error=비밀번호가 잘못되었습니다.");
                    exit();
               }
            }else{
                header("location: index.php?error=아이디가 존재하지 않습니다.");
                exit();
            }
        } 
    }