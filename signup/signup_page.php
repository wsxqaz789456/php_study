<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <h1>회원가입</h1>
    <?php if(isset($_GET["error"])){ ?>
    <p><?php echo $_GET["error"]; ?></p>
    <?php } ?>
    <form action="signup.php" method="post">
        <p>
            <input type="text" name="username" placeholder="id" required="true">
        </p>
        <p>
            <input type="password" name="password"  placeholder="password" required="true">
        </p>
        <p>
            <input type="text" name="name"  placeholder="name" required="true">
        </p>
        <p>
            <input type="email" name="email"  placeholder="email" required="true">
        </p>
        <input type="submit">
    </form>    
</body>
</html>