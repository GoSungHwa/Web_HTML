<?php
include './session.php';
echo "<meta charset='utf-8'>";
if(!isset($_SESSION['user_id'])) {
    echo "<script>alert(\"already\");</script>";
    echo "<script>location.replace('../index.php')</script>";
    exit();
}

unset($_SESSION['user_id']);
unset($_SESSION['user_name']);

if(!isset($_SESSION['user_id'])) {//세션값 unset
   echo "<script>alert(\"로그아웃\");</script>";
   echo "<script>location.replace('../index.php')</script>";//메인페이지로 이동후에 메인페이지에서 세션 확인후 로그인 페이지로 이동
   exit();
}
?>