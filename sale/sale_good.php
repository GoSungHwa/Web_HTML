<?php
include '../sql/session.php';
include '../db.php';

if(isset($_SESSION['user_id'])) $id = $_SESSION['user_id'];
else unset($id);

if(!isset($id)) { echo " <script> alert('로그인 후 이용해주세요.'); location.replace('../login/login.php'); </script> "; }

$num = $_REQUEST["num"];

if(!isset($_COOKIE['goodContents'.$num.$id])) {
    setcookie('goodContents' . $num.$id, TRUE, time() + (60 * 60 * 24)*365, '/');
    $good = mysqli_fetch_array(mq("select good from sale where num ='".$num."'"));
    $good = $good['good'] + 1;
    $fet = mq("update sale set good = '".$good."' where num = '".$num."'");
    echo "<script>alert('추천하셨습니다.'); history.back();</script>";
} else {
    echo "<script> alert('이미 추천했습니다.'); history.back();</script>";
}

?>