<?php
session_start();
    if(isset($_SESSION["username"])){
        session_unset();
        session_destroy();
        header("location:index.php?success=로그아웃이 완료되었습니다.");
    }
    else{
        header("location:index.php?error=로그인 사용자만 로그아웃이 가능합니다.");
    }
    
