<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <h1>환영합니다.</h1>
    <?php if(isset($_GET["success"])) { ?>
    <p><?php echo $_GET["success"]?></p>
    <?php } ?>
    <?php if(isset($_GET["error"])) {?>
    <p><?php echo $_GET["error"]?></p>
    <?php } ?>
    <?php if(isset($_SESSION["username"])) {
        header("location:mypage.php");
    } else { ?>
        <a href="signup_page.php">회원가입</a>
        <form action="login.php" method="POST">
            <p>
                <input type="text" required="true" name="username">
            </p>
            <p>
                <input type="password" required="true" name="password">
            </p>
                <input type="submit" value="login">
    <?php } ?>
</body>
</html>