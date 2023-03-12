<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php if(isset($_SESSION["username"])) { ?>
    <p><?php echo $_SESSION["username"].'님 환영합니다.'?></p>  
    <a href="logout.php">
        <button>로그아웃</button>
    </a>
    <?php } else {
        header("location:index.php?error=로그인을 해야함");
    }?> 
</body>
</html>